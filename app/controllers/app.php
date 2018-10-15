<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function indoDate()
    {
        $bulan = array (1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $tanggal = get_the_date();

        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ', ' . $split[0];
    }

    public function sources()
    {
        global $post;
        $m_meta_source = get_post_meta($post->ID, 'source_fields', true);
        $html = '<div class="source-box mb-5 small-section"> <div class="section-header"><h1>Source</h1>';
        $html .= '</div><ul>';
        foreach ( $m_meta_source as $source ) {
            $html .= '<li><a href="'.$source["url"].'" target="_blank">'.$source["name"].'</a></li>' ;
        }
        $html .= '</ul></div>';

        return $html;
    }

    public function share()
    {
        $html = '<div class="shareit small-section"> <div class="section-header d-flex"><h1>Share</h1>';
        $html .= '<div class="shareit__inner ml-4 mb-3">';
        $html .= '<a href="#"  id="fb_link" > <i class="fab fa-facebook-f mr-2"></i>Facebook</a>';
        $html .= ' <a href="#" id="twitter_link" class="ml-3"> <i class="fab fa-twitter mr-2"></i>Twitter</a>';
        $html .= '</div>';
        $html .= '</div></div>';
        return $html;
    }

}
