<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/restaurant_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_94d934c9561b1e6e680391e01d28b7fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-4\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76)) {
            // line 77
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 79
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 83)) {
            // line 84
            echo "          <div class=\"col-md-4\">
            ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 88
        echo "      
        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 89)) {
            // line 90
            echo "          <div class=\"col-md-4\">
            ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_email", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 94
        echo "
        </div>
      </div>
    </nav>
</header>


<!-- End: Main menu -->

";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103)) {
            // line 104
            echo "  <div class=\"main-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "

          <!-- Start: Social media icons -->

          ";
            // line 112
            if (($context["show_social_icon"] ?? null)) {
                // line 113
                echo "            <div class=\"social-media\">
              ";
                // line 114
                if (($context["facebook_url"] ?? null)) {
                    // line 115
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 115, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 117
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 118
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 118, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 120
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 121
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 121, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 123
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 124
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 124, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 126
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 127
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 127, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 129
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 130
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 130, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 132
                echo "            </div>
          ";
            }
            // line 134
            echo "
          <!-- End: Social media icons -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 142
        echo "
<!-- End: Main menu -->


<!-- Start: Slider -->

  ";
        // line 148
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 149
            echo "    <div class=\"flexslider wow- bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 152
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 152, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "      </ul>
    </div>
  ";
        }
        // line 157
        echo "
<!-- End: Slider -->


<!-- Start: Home page message -->

";
        // line 163
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 163))) {
            // line 164
            echo "<div class=\"home-message\">
  <div class=\"container\">
    <div class=\"wow- bounceInDown\">    
        ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "homepagemessage", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "
    </div>
  </div>
</div>
";
        }
        // line 172
        echo "
<!--End: Home page message -->

<!-- Start: Top widget -->

";
        // line 177
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 177) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 177)))) {
            // line 178
            echo "  <div class=\"container-\">
    <div class=\"parallax-region wow- bounceInDown\">

      ";
            // line 181
            if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 181) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 181)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 181)))) {
                // line 182
                echo "        <div class=\"row- clearfix topwidget\">

          <!-- Start: Top widget first -->          
          ";
                // line 185
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 185)) {
                    // line 186
                    echo "            <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 186, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
                    echo "</div>
          ";
                }
                // line 187
                echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
                // line 191
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 191)) {
                    // line 192
                    echo "            <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 192, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                    echo "</div>
          ";
                }
                // line 193
                echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
                // line 197
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 197)) {
                    // line 198
                    echo "            <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 198, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
                    echo "</div>
          ";
                }
                // line 199
                echo "          
          <!-- End: Top widget third -->

          <!-- Start: Top widget forth -->         
          ";
                // line 203
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_forth", [], "any", false, false, true, 203)) {
                    // line 204
                    echo "            <div class = ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 204, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_forth", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                    echo "</div>
          ";
                }
                // line 205
                echo "          
          <!-- End: Top widget forth -->

        </div>
      ";
            }
            // line 210
            echo "
    </div>
  </div>
";
        }
        // line 214
        echo "
<!--End: Top widget -->


<!-- Start: Main content -->
<div class=\"parallax-widget- one\">
  <div class=\"parallax-region- wow- bounceInDown\">
    
    <!--Start: Highlighted -->

    ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 224)) {
            // line 225
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 233
        echo "
    <!--End: Highlighted -->

    <!--Start: Title -->

    ";
        // line 238
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 238) &&  !($context["is_front"] ?? null))) {
            // line 239
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 251
        echo "
    <!--End: Title -->

    <div class=\"container\">
      <div class=\"parallax-region\">

        <!--Start: Breadcrumb -->

        ";
        // line 259
        if ( !($context["is_front"] ?? null)) {
            // line 260
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 261
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
            echo "</div>
          </div>
        ";
        }
        // line 264
        echo "
        <!--End: Breadcrumb -->

        <div class=\"row layout\">

          <!--Start: Sidebar -->

          ";
        // line 271
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 271)) {
            // line 272
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 273
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 273, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 273), 273, $this->source), "html", null, true);
            echo " </div>
            </div>
          ";
        }
        // line 276
        echo "
          <!--End: Sidebar -->

          <!--End: Content -->

          ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 281)) {
            // line 282
            echo "
            <div class=\"content_layout\">

              <div class=";
            // line 285
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 285, $this->source), "html", null, true);
            echo "> 

                ";
            // line 287
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            echo " 

              </div>

            </div>

          ";
        }
        // line 294
        echo "
          <!--End: Content -->

          <!--Start: Sidebar -->

          ";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 299)) {
            // line 300
            echo "
            <div class=\"sidebar\">
              <div class=";
            // line 302
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 302, $this->source), "html", null, true);
            echo "> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
            echo " </div>
            </div>
            
          ";
        }
        // line 306
        echo "
          <!--End: Sidebar -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Services -->

";
        // line 320
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 320))) {
            // line 321
            echo "
  <div class=\"parallax-widget- two\" id=\"services\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 327
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 334
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 340
        if ((($context["is_front"] ?? null) && (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 340) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 340)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 340)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 340)))) {
            // line 341
            echo "  <div class=\"bottom-widget\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 347
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 347)) {
                // line 348
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 348, $this->source), "html", null, true);
                echo ">
              ";
                // line 349
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 351
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 355
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 355)) {
                // line 356
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 356, $this->source), "html", null, true);
                echo ">
              ";
                // line 357
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 357), 357, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 359
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 363
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 363)) {
                // line 364
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 364, $this->source), "html", null, true);
                echo ">
              ";
                // line 365
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 365), 365, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 367
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 371
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 371)) {
                // line 372
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 372, $this->source), "html", null, true);
                echo ">
              ";
                // line 373
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 373), 373, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 376
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 383
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 389
        if ((($context["is_front"] ?? null) && ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 389) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 389)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 389)))) {
            // line 390
            echo "  <div class=\"footerwidget\" id=\"\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 396
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 396)) {
                // line 397
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null), 397, $this->source), "html", null, true);
                echo ">
              ";
                // line 398
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 401
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 404
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 404)) {
                // line 405
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 405, $this->source), "html", null, true);
                echo ">
              ";
                // line 406
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 409
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 412
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 412)) {
                // line 413
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 413, $this->source), "html", null, true);
                echo ">
              ";
                // line 414
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 417
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>

    ";
            // line 423
            if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 423))) {
                // line 424
                echo "      <div class=\"container clients-wrap\">
        <div class=\"parallax-region wow- bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
                // line 428
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 428), 428, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        </div>
      </div>
    ";
            }
            // line 434
            echo "
  </div>
";
        }
        // line 437
        echo "
<!--End: Footer widgets -->


<!-- Start: Map -->

";
        // line 443
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 443))) {
            // line 444
            echo "  <div class=\"map-and-address\">
    <div class=\"google_map\">";
            // line 445
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "google_map", [], "any", false, false, true, 445), 445, $this->source), "html", null, true);
            echo "</div>
  </div>
";
        }
        // line 448
        echo "
<!--End: Map -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-8\">
        <div class=\"user-menu\">
          <p>Copyright © ";
        // line 460
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
          ";
        // line 461
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 461)) {
            // line 462
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 462), 462, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 464
        echo "        </div>        
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 469
        if (($context["show_credit_link"] ?? null)) {
            // line 470
            echo "        <div class=\"col-sm-4\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 474
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/restaurant_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 474,  772 => 470,  770 => 469,  763 => 464,  757 => 462,  755 => 461,  751 => 460,  737 => 448,  731 => 445,  728 => 444,  726 => 443,  718 => 437,  713 => 434,  704 => 428,  698 => 424,  696 => 423,  688 => 417,  682 => 414,  677 => 413,  675 => 412,  670 => 409,  664 => 406,  659 => 405,  657 => 404,  652 => 401,  646 => 398,  641 => 397,  639 => 396,  631 => 390,  629 => 389,  621 => 383,  612 => 376,  606 => 373,  601 => 372,  599 => 371,  593 => 367,  587 => 365,  582 => 364,  580 => 363,  574 => 359,  568 => 357,  563 => 356,  561 => 355,  555 => 351,  549 => 349,  544 => 348,  542 => 347,  534 => 341,  532 => 340,  524 => 334,  514 => 327,  506 => 321,  504 => 320,  488 => 306,  479 => 302,  475 => 300,  473 => 299,  466 => 294,  456 => 287,  451 => 285,  446 => 282,  444 => 281,  437 => 276,  429 => 273,  426 => 272,  424 => 271,  415 => 264,  409 => 261,  406 => 260,  404 => 259,  394 => 251,  384 => 244,  377 => 239,  375 => 238,  368 => 233,  360 => 228,  355 => 225,  353 => 224,  341 => 214,  335 => 210,  328 => 205,  320 => 204,  318 => 203,  312 => 199,  304 => 198,  302 => 197,  296 => 193,  288 => 192,  286 => 191,  280 => 187,  272 => 186,  270 => 185,  265 => 182,  263 => 181,  258 => 178,  256 => 177,  249 => 172,  241 => 167,  236 => 164,  234 => 163,  226 => 157,  221 => 154,  212 => 152,  208 => 151,  204 => 149,  202 => 148,  194 => 142,  184 => 134,  180 => 132,  174 => 130,  171 => 129,  165 => 127,  162 => 126,  156 => 124,  153 => 123,  147 => 121,  144 => 120,  138 => 118,  135 => 117,  129 => 115,  127 => 114,  124 => 113,  122 => 112,  115 => 108,  109 => 104,  107 => 103,  96 => 94,  90 => 91,  87 => 90,  85 => 89,  82 => 88,  76 => 85,  73 => 84,  71 => 83,  65 => 79,  59 => 77,  57 => 76,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/restaurant_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupalProject5\\themes\\restaurant_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 76, "for" => 151);
        static $filters = array("escape" => 77, "raw" => 152, "date" => 460);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
