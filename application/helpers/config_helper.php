<?php

function config($val, $set = FALSE) {
    $Muh = &get_instance();
    if ($set) {
        $Muh->config->set_item($val, $set);
    }
    else
        return $Muh->config->item($val);
}


function session($val, $set = FALSE) {
    $Muh = &get_instance();
    if ($set) {
        $Muh->session->set_userdata($val, $set);
    }
    else
        return $Muh->session->userdata($val);
}

function permission($rule = FALSE) {
    if ( $rule )
        $rule = __CLASS__;
    if ( ! session('user_id') )
        redirect('admin/login');
    $Muh = & get_instance();
    return $Muh->permission->detect($rule);
}

function validation_rule($field = false, $datatype = false) {
    $rules = array('trim', 'required');
    if (preg_match('/int/', $datatype))
        $rules[] = 'integer';
    elseif (preg_match('/double/', $datatype))
        $rules[] = 'numeric';
    elseif (preg_match('/datetime/', $datatype))
        $rules[] = 'valid_datetime';
    elseif (preg_match('/date/', $datatype))
        $rules[] = 'valid_date';

    return implode('|', $rules);
}

function generate_input($table = false, $field = false, $op = 'add') {
    $db = false;
    if ($op == 'edit')
        $db = ", \$item->$field->Field";
    if (preg_match("/id/", $field->Field) && preg_match("/int/", $field->Type)) {
        $database = session('database');
        $related_table = NULL;
        $related_table_pk = NULL;
        $related_table_title = NULL;
        $CI = & get_instance();
        foreach ($CI->db->query("SHOW TABLES")->result() as $rtable)
            if (preg_match("/" . str_replace('_id', '', $field->Field) . "/", $rtable->{"Tables_in_$database"})) {
                $related_table = $rtable->{"Tables_in_$database"};
                foreach ($CI->db->query("SHOW COLUMNS FROM " . $related_table)->result() as $rtable_fields) {
                    if ($rtable_fields->Key == 'PRI')
                        $related_table_pk = $rtable_fields->Field;
                    if (preg_match('/name_/', $rtable_fields->Field))
                        $related_table_title = "name()";
                    elseif (preg_match('/name/', $rtable_fields->Field))
                        $related_table_title = "'name'";
                    elseif (preg_match('/title/', $rtable_fields->Field))
                        $related_table_title = "'title'";
                }
            }
        return "<?= form_dropdown('$field->Field', ddgen('$related_table', array('$related_table_pk', $related_table_title)), set_value('$field->Field'$db), 'class=\"text_input $field->Field\"') ?>";
    }
    elseif (preg_match("/varchar/", $field->Type) or preg_match("/int/", $field->Type)) {
        return "<?= form_input('$field->Field', set_value('$field->Field'$db), 'class=\"text_input $field->Field\"') ?>";
    } elseif (preg_match("/text/", $field->Type)) {
        return "<?= form_textarea('$field->Field', set_value('$field->Field'$db), 'class=\"text_input $field->Field\"') ?>";
    }
}

function generate_input_($table = false, $field = false, $style = 'sales') {
    $database = session('database');
    if (preg_match("/id/", $field->Field) && preg_match("/int/", $field->Type)) {
        $database = session('database');
        $related_table = NULL;
        $related_table_pk = NULL;
        $related_table_title = NULL;
        $CI = & get_instance();
        $CI->db->query("USE $database");
        foreach ($CI->db->query("SHOW TABLES")->result() as $rtable)
            if (preg_match("/" . str_replace('_id', '', $field->Field) . "/", $rtable->{"Tables_in_$database"})) {
                $related_table = $rtable->{"Tables_in_$database"};
                foreach ($CI->db->query("SHOW COLUMNS FROM " . $related_table)->result() as $rtable_fields) {
                    if ($rtable_fields->Key == 'PRI')
                        $related_table_pk = $rtable_fields->Field;
                    if (preg_match('/name_/', $rtable_fields->Field))
                        $related_table_title = "name()";
                    elseif (preg_match('/name/', $rtable_fields->Field))
                        $related_table_title = "'name'";
                    elseif (preg_match('/title/', $rtable_fields->Field))
                        $related_table_title = "'title'";
                }
            }
        $data['type'] = 'dropdown';
        $data['related_table'] = $related_table;
        $data['related_table_pk'] = $related_table_pk;
        $data['related_table_title'] = $related_table_title;
    } elseif (preg_match("/text/", $field->Type)) {
        $data['type'] = 'text';
    } elseif (preg_match("/datetime/", $field->Type)) {
        $data['type'] = 'datetime';
    } elseif (preg_match("/date/", $field->Type)) {
        $data['type'] = 'date';
    } else {//(preg_match("/varchar/", $field->Type) or preg_match("/int/", $field->Type)) {
        $data['type'] = 'varchar';
    }
    return $data;
}

function user(){
    global $user;
    if( ! $user){
        $db = & get_instance();
        $user = $db->db->where("user_id", session("user_id"))
                ->get("users")
                ->row();
    }
    return $user;
    
}