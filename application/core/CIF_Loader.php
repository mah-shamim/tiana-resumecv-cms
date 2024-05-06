<?php

class CIF_Loader extends CI_Loader {

    /**
     * Load Theme File
     *
     * @param	string
     * @param	array
     * @param	bool
     * @return	void
     */
    public function view($view, $vars = array(), $return = FALSE) {
        $this->_ci_view_paths = array(get_instance()->style->stylePath.'/' => TRUE);
        return $this->_ci_load(array(
            '_ci_view' => $view,
//            '_ci_path' => get_instance()->style->stylePath.'/',
            '_ci_vars' => $this->_ci_object_to_array($vars),
            '_ci_return' => $return));
    }

}