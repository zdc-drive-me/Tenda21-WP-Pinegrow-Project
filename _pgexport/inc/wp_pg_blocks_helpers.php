<?php
/**
 * Class Name: PG_Blocks
 * GitHub URI:
 * Description:
 * Version: 7.0
 * Author: Matjaz Trontelj - @pinegrow
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */

if(! class_exists( 'PG_Blocks_v7' )) {
    class PG_Blocks_v7
    {

        static $helpers_registered = false;

        static $recursive_level = 0;

        static $controls_version = '5';

        static function register_block_type($reg_args)
        {
            if (empty($reg_args['base_url'])) {
                $reg_args['base_url'] = get_template_directory_uri();
            }

            if (empty($reg_args['base_path'])) {
                $reg_args['base_path'] = get_template_directory();
            }

            if (empty($reg_args['version'])) {
                $reg_args['version'] = false;
            }

            $base_url = trailingslashit($reg_args['base_url']);

            if (!empty($reg_args['metadata_path']) && empty($reg_args['name'])) {
                $metadata_file = is_dir($reg_args['metadata_path']) ? trailingslashit($reg_args['metadata_path']) . 'block.json' : $reg_args['metadata_path'];
                if (file_exists($metadata_file)) {
                    $metadata = json_decode(file_get_contents($metadata_file), true);
                    if (!empty($metadata['name'])) {
                        $reg_args['name'] = $metadata['name'];
                    }
                }
            }

            if (empty($reg_args['name'])) {
                return;
            }

            if (!self::$helpers_registered) {
                self::$helpers_registered = true;

                $controls_dependencies = array('wp-blocks', 'wp-block-editor', 'wp-components', 'wp-compose', 'wp-api-fetch', 'wp-i18n', 'wp-media-utils', 'wp-data', 'wp-element', 'wp-url', 'wp-server-side-render');

                wp_register_script("pg-blocks-controls-" . self::$controls_version,
                    $base_url . 'blocks/pg-blocks-controls-' . self::$controls_version . '.js',
                    $controls_dependencies, $reg_args['version']);

                wp_register_style('pg-blocks-controls-style-' . self::$controls_version,
                    $base_url . 'blocks/pg-blocks-controls-' . self::$controls_version . '.css',
                    array(), $reg_args['version']);
            }

            $handle_prefix = 'block-' . str_replace('/', '-', $reg_args['name']);
            $editor_script_handle = $handle_prefix . '-script';
            $just_name = basename($reg_args['name']);
            $slug = dirname($reg_args['name']);

            $style_handle = null;
            $script_handle = null;
            $view_script_handle = null;

            if (!empty($reg_args['enqueue_style'])) {
                $style_handle = 'block-' . md5($reg_args['enqueue_style']);
                wp_register_style($style_handle, $reg_args['enqueue_style'], array(), $reg_args['version']);
            }

            $editor_style_handle = 'pg-blocks-controls-style-' . self::$controls_version;

            if (!empty($reg_args['enqueue_editor_style'])) {
                $editor_style_handle = 'block-editor-' . md5($reg_args['enqueue_editor_style']);
                wp_register_style($editor_style_handle, $reg_args['enqueue_editor_style'], array('pg-blocks-controls-style-' . self::$controls_version), $reg_args['version']);
            }

            $script_dependencies = array('wp-blocks', 'wp-block-editor', 'wp-components', 'wp-i18n', 'wp-media-utils', 'wp-data', 'wp-element', 'pg-blocks-controls-' . self::$controls_version);

            if (!empty($reg_args['enqueue_script'])) {
                $script_handle = 'block-script-' . md5($reg_args['enqueue_script']);
                wp_register_script($script_handle, $reg_args['enqueue_script'], array(), $reg_args['version'], true);
            }

            if (!empty($reg_args['enqueue_view_script'])) {
                $view_script_handle = 'block-script-' . md5($reg_args['enqueue_view_script']);
                wp_register_script($view_script_handle, $reg_args['enqueue_view_script'], array(), $reg_args['version'], true);
            }

            if (!empty($reg_args['enqueue_editor_script'])) {
                $editor_custom_script_handle = 'block-script-' . md5($reg_args['enqueue_editor_script']);
                wp_register_script($editor_custom_script_handle, $reg_args['enqueue_editor_script'], $script_dependencies, $reg_args['version']);
                $script_dependencies = array($editor_custom_script_handle);
            }

            wp_register_script($editor_script_handle,
                $base_url . $reg_args['js_file'], $script_dependencies, $reg_args['version']);

            wp_localize_script($editor_script_handle,
                'pg_project_data_' . str_replace('-', '_', $slug),
                array(
                    'url' => $base_url,
                )
            );

            $block_args = array();

            if (empty($reg_args['metadata_path'])) {
                $block_args['api_version'] = isset($reg_args['api_version']) ? $reg_args['api_version'] : 3;
                $block_args['editor_script'] = $editor_script_handle;
                $block_args['attributes'] = $reg_args['attributes'];
                $block_args['supports'] = isset($reg_args['supports']) ? $reg_args['supports'] : array();
            }

            if (!empty($reg_args['dynamic'])) {
                $block_args['render_callback'] = function ($attributes, $content, $block) use ($reg_args) {
                        self::$recursive_level++;
                        if (self::$recursive_level > 10) {
                            self::$recursive_level--;
                            return 'Too many nested blocks... Are you including a post within itself?';
                        }
                        ob_start();
                        $args = array('attributes' => $attributes, 'content' => $content, 'block' => $block, 'base_url' => $reg_args['base_url']);
                        $template = trailingslashit($reg_args['base_path']) . $reg_args['render_template'];
                        if (file_exists($template)) {
                            require $template;
                        } else {
                            echo "<div>Dynamic block template $template not found.</div>";
                        }
                        self::$recursive_level--;
                        return ob_get_clean();
                    };
            }

            $block_args['editor_style'] = $editor_style_handle;

            if ($style_handle) {
                $block_args['style'] = $style_handle;
            }

            if ($script_handle) {
                $block_args['script'] = $script_handle;
            }

            if ($view_script_handle) {
                $block_args['view_script'] = $view_script_handle;
            }

            if (!empty($reg_args['metadata_path'])) {
                register_block_type_from_metadata($reg_args['metadata_path'], $block_args);
            } else {
                register_block_type($reg_args['name'], $block_args);
            }
        }

        static function getDefault($args, $prop, $subprop = null)
        {
            if (isset($args['block']->block_type->attributes[$prop]['default'])) {
                if ($subprop) {
                    if (isset($args['block']->block_type->attributes[$prop]['default'][$subprop])) {
                        return $args['block']->block_type->attributes[$prop]['default'][$subprop];
                    } else {
                        return null;
                    }
                } else {
                    return $args['block']->block_type->attributes[$prop]['default'];
                }
            }
            return null;
        }

        static function getAttribute($args, $prop, $use_default = true, $null = false)
        {
            $val = isset($args['attributes']) && isset($args['attributes'][$prop]) ? $args['attributes'][$prop] : null;
            if (($val === null || $val === '') && $use_default) {
                $val = self::getDefault($args, $prop);
            }
            if ($val === '' && $null) {
                $val = null;
            }
            return $val;
        }

        static function getAttributeForAction($args, $prop, $field = null)
        {
            $val = self::getAttribute($args, $prop);
            if ($field) {
                if (is_array($val) && isset($val[$field])) {
                    return $val[$field];
                } else {
                    return null;
                }
            }
            if (is_array($val)) {
                if (isset($val['id'])) return $val['id'];
            }
            return $val;
        }

        static function getAttributeAsPostIds($args, $prop)
        {
            $r = array();
            $list = self::getAttribute($args, $prop);
            if (is_array($list)) {
                foreach ($list as $item) {
                    $r[] = $item['id'];
                }
            }
            if (count($r) === 0) $r[] = 0;
            return $r;
        }

        static function getInnerContent($args)
        {
            return isset($args['content']) ? $args['content'] : '';
        }

        static function resolveMediaUrl($args, $url)
        {
            if (is_string($url) && $url !== '' && $url[0] !== '#' && !preg_match('/^(?:[a-z][a-z0-9+.-]*:|\/\/)/i', $url)) {
                $base_url = !empty($args['base_url']) ? $args['base_url'] : get_template_directory_uri();
                return trailingslashit($base_url) . ltrim($url, '/');
            }
            return $url;
        }

        static function getImageUrl($args, $prop, $size, $use_default = true)
        {
            $a = $args['attributes'];
            if (!isset($a[$prop])) return $use_default ? self::resolveMediaUrl($args, self::getDefault($args, $prop, 'url')) : null;
            if (!empty($a[$prop]['url'])) {
                $default_url = self::getDefault($args, $prop, 'url');
                return $a[$prop]['url'] === $default_url ? self::resolveMediaUrl($args, $a[$prop]['url']) : $a[$prop]['url'];
            }
            if (empty($a[$prop]['id'])) return $use_default ? self::resolveMediaUrl($args, self::getDefault($args, $prop, 'url')) : null;
            if (!empty($a[$prop]['size'])) {
                $size = $a[$prop]['size'];
            }
            return PG_Image::getUrl($a[$prop]['id'], $size);
        }

        static function getImageSVG($args, $prop, $use_default = true)
        {
            return self::getImageField($args, $prop, 'svg', $use_default);
        }

        static function getImageField($args, $prop, $field, $use_default = true)
        {
            $a = $args['attributes'];
            if (!isset($a[$prop])) return $use_default ? self::getDefault($args, $prop, $field) : null;
            if (!empty($a[$prop][$field])) {
                return $a[$prop][$field];
            }
            return $use_default ? self::getDefault($args, $prop, $field) : null;
        }

        static function getLinkUrl($args, $prop, $use_default = true)
        {
            $a = self::getAttribute($args, $prop);
            if (is_array($a) && isset($a['url'])) {
                $val = $a['url'];
            } else {
                $val = $a;
            }
            if ($val === null || $val === '') $val = $use_default ? self::getDefault($args, $prop, 'url') : $val;
            return $val;
        }

        static function mergeInlineSVGAttributes($svg, $props)
        {
            foreach ($props as $prop => $val) {
                if ($prop === 'className') $prop = 'class';
                if (is_array($val)) {
                    $r = '';
                    foreach ($val as $key => $v) {
                        $key = preg_replace_callback("/([A-Z])/g", function ($m) {
                            return '-' . strtolower($m[1]);
                        }, $key);
                        $r .= "$key:$v;";
                    }
                    $val = $r;
                }
                $q = '"';
                if (strpos($val, '"') >= 0) {
                    $val = str_replace('"', "&quot;", $val);
                }
                $re = "/(<svg[^>]*\\s*)($prop=\"[^\"]*\")/i";
                if (preg_match($re, $svg)) {
                    $svg = preg_replace($re, '$1' . $prop . '=' . $q . $val . $q, $svg);
                } else {
                    $svg = str_replace('<svg', "<svg $prop={$q}{$val}{$q}", $svg);
                }
            }
            return $svg;
        }

        static function setupEditedPost()
        {
            global $wp_query, $post;
            if (!empty($_GET['context']) && $_GET['context'] === 'edit') {
                $referer = wp_get_raw_referer();
                if (!empty($referer)) {
                    $url_info = parse_url($referer);
                    $query = null;
                    parse_str($url_info['query'], $query);
                    if (!empty($query['post'])) {
                        $post = get_post($query['post']);
                        if (!empty($post)) {
                            $wp_query->setup_postdata($post);
                        }
                    }
                }
            }
        }
    }
}
