<?php

function dd2menu($table, $field = array(), $set_condition = FALSE, $direct = FALSE)
{
    $MMSELECT = &get_instance();
    $data['items'] = array();
    if (!$direct)
        $data['items'] = array(
            '' => lang('global_select_from_menu')
        );
    elseif ($direct == TRUE)
    {}else
        $data['items'] = array(
            '' => $direct
        );
    if (is_array($set_condition) && count($set_condition)) {

        foreach ($set_condition as $key => $value)
            $MMSELECT->db->where($key, $value);
    }

    $items = $MMSELECT->db->select(key($field).",". $field[key($field)])->get($table)->result();
    foreach ($items as $item)
        $data['items'][$item->{key($field)}] = $item->{$field[key($field)]};


    return $data['items'];
}


function ddboolean($field = FALSE)
{
    $data = array(
        '' => lang('global_select_from_menu'),
        '1' => lang('global_yes'),
        '0' => lang('global_no'),
    );
    if ($field !== FALSE or $field == 0 && ($field !== FALSE && $field !== 0))
        return $data[$field];

    return $data;
}



function age_from_dof($date)
{
    list($y, $m, $d) = explode('-', $date);

    if (($m = (date('m') - $m)) < 0) {
        $y++;
    } elseif ($m == 0 && date('d') - $d < 0) {
        $y++;
    }

    return date('Y') - $y;
}



function languages(){
    $res = [];
    foreach(glob("./application/language/*") as $item){
        $lang = str_replace("./application/language/", "", $item);
        $res[$lang] = $lang;
    }
    return $res;
}