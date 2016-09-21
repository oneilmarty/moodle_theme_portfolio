<?php
    function purplemartin_process_css($css, $theme) {
 
        if (!empty($theme->settings->backgroundcolor)) {
            $backgroundcolor = $theme->settings->backgroundcolor;
        } else {
            $backgroundcolor = null;
        }
        $css = demystified_set_backgroundcolor($css, $backgroundcolor);
     
        if (!empty($theme->settings->regionwidth)) {
            $regionwidth = $theme->settings->regionwidth;
        } else {
            $regionwidth = null;
        }
        $css = demystified_set_regionwidth($css, $regionwidth);
     
        if (!empty($theme->settings->customcss)) {
            $customcss = $theme->settings->customcss;
        } else {
            $customcss = null;
        }
        $css = demystified_set_customcss($css, $customcss);

        if (!empty($theme->settings->headerbackgroundone)) {
            $headerbackgroundone = $theme->settings->headerbackgroundone;
        } else {
            $headerbackgroundone = null;
        }
        $css = demystified_set_headerbackgroundone($css, $headerbackgroundone);

        if (!empty($theme->settings->headerbackgroundtwo)) {
            $headerbackgroundtwo = $theme->settings->headerbackgroundtwo;
        } else {
            $headerbackgroundtwo = null;
        }
        $css = demystified_set_headerbackgroundtwo($css, $headerbackgroundtwo); 

        if (!empty($theme->settings->headerbackgroundthree)) {
            $headerbackgroundthree = $theme->settings->headerbackgroundthree;
        } else {
            $headerbackgroundthree = null;
        }
        $css = demystified_set_headerbackgroundthree($css, $headerbackgroundthree);
     
        return $css;
    }

    /**
         * Sets the background colour variable in CSS
         *
         * @param string $css
         * @param mixed $backgroundcolor
         * @return string
         */
    function demystified_set_backgroundcolor($css, $backgroundcolor) {
        $tag = '[[setting:backgroundcolor]]';
        $replacement = $backgroundcolor;
        if (is_null($replacement)) {
            $replacement = '#DDDDDD';
        }
        $css = str_replace($tag, $replacement, $css);
        return $css;
    }

    /**
         * Sets the region width variable in CSS
         *
         * @param string $css
         * @param mixed $regionwidth
         * @return string
         */
    function demystified_set_regionwidth($css, $regionwidth) {
        $tag = '[[setting:regionwidth]]';
        $doubletag = '[[setting:regionwidthdouble]]';
        $replacement = $regionwidth;
        if (is_null($replacement)) {
            $replacement = 200;
        }
        $css = str_replace($tag, $replacement.'px', $css);
        $css = str_replace($doubletag, ($replacement*2).'px', $css);
        return $css;
    }


    /**
         * Sets the background colour variable in CSS
         *
         * @param string $css
         * @param mixed $headerbackgroundone
         * @return string
         */
    function demystified_set_headerbackgroundone($css, $headerbackgroundone) {
        $tag = '[[setting:headerbackgroundone]]';
        $replacement = $headerbackgroundone;
        if (is_null($replacement)) {
            $replacement = '#000';
        }
        $css = str_replace($tag, $replacement, $css);
        return $css;
    }

    /**
         * Sets the background colour variable in CSS
         *
         * @param string $css
         * @param mixed $headerbackgroundtwo
         * @return string
         */
    function demystified_set_headerbackgroundtwo($css, $headerbackgroundtwo) {
        $tag = '[[setting:headerbackgroundtwo]]';
        $replacement = $headerbackgroundtwo;
        if (is_null($replacement)) {
            $replacement = '#673695';
        }
        $css = str_replace($tag, $replacement, $css);
        return $css;
    }

    /**
         * Sets the background colour variable in CSS
         *
         * @param string $css
         * @param mixed $headerbackgroundthree
         * @return string
         */
    function demystified_set_headerbackgroundthree($css, $headerbackgroundthree) {
        $tag = '[[setting:headerbackgroundthree]]';
        $replacement = $headerbackgroundthree;
        if (is_null($replacement)) {
            $replacement = '#000';
        }
        $css = str_replace($tag, $replacement, $css);
        return $css;
    }


    /**
         * Sets the custom css variable in CSS
         *
         * @param string $css
         * @param mixed $customcss
         * @return string
         */
    function demystified_set_customcss($css, $customcss) {
        $tag = '[[setting:customcss]]';
        $replacement = $customcss;
        if (is_null($replacement)) {
            $replacement = '';
        }
        $css = str_replace($tag, $replacement, $css);
        return $css;
    }