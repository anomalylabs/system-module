<?php namespace Anomaly\SystemModule\System\Command;

/**
 * Class ReplacePHPInfoStyles
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ReplacePHPInfoStyles
{

    /**
     * The PHP Info output.
     *
     * @var string
     */
    protected $content;

    /**
     * Create a new ReplacePHPInfoStyles instance.
     *
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Handle the command.
     *
     * @return string
     */
    public function handle()
    {
        $style = '
            <style type="text/css">
                #phpinfo body {background-color: #fff; color: #222; font-family: sans-serif;}
                #phpinfo pre {margin: 0; font-family: monospace;}
                #phpinfo a:link {color: #009; text-decoration: none; background-color: #fff;}
                #phpinfo a:hover {text-decoration: underline;}
                #phpinfo table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
                #phpinfo .center {text-align: center;}
                #phpinfo .center table {margin: 1em auto; text-align: left;}
                #phpinfo .center th {text-align: center !important;}
                #phpinfo td, #phpinfo th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
                #phpinfo h1 {font-size: 150%;}
                #phpinfo h2 {font-size: 125%;}
                #phpinfo .p {text-align: left;}
                #phpinfo .e {background-color: #ccf; width: 300px; font-weight: bold;}
                #phpinfo .h {background-color: #99c; font-weight: bold;}
                #phpinfo .v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
                #phpinfo .v i {color: #999;}
                #phpinfo img {float: right; border: 0;}
                #phpinfo hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
            </style>
        ';

        return preg_replace("/<style\\b[^>]*>(.*?)<\\/style>/s", $style, $this->content);
    }

}
