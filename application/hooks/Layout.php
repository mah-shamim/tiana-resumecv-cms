<?php

class Layout {

    public $layout = 'default';
    public $CI;
    
    public function render() {
        $this->CI = &get_instance();
        $output = $this->CI->output->get_output();
        
// $this->CI->style->stylePath        
        if($this->CI->input->is_ajax_request())
            $this->layout = 'ajax';
        if (isset($this->CI->layout))
            $this->layout = $this->CI->layout;

        if ($this->layout == 'none')
            return;

        if ($this->CI->output->enable_profiler === TRUE && $this->layout !== 'ajax') {
            $this->CI->load->library('profiler');
            if (!empty($this->CI->output->_profiler_sections)) {
                $this->CI->profiler->set_sections($this->CI->output->_profiler_sections);
            }
            
            $output = preg_replace('|</body>.*?</html>|is', '', $output, -1, $count) . $this->CI->profiler->run();
            if ($count > 0) {
                $output .= '</body></html>';
            }
        }

        $output = str_replace('{layout}', $output, $this->CI->load->view('layout/' . $this->layout, NULL, TRUE));
        echo $output;
    }
    
    private function getStylePath() {
        return $this->CI->Style->stylePath;
    }
    
    

}