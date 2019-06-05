<?php

namespace Drupal\gcweb_library\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a WxT 'Search form' block.
 *
 * @Block(
 *   id = "canada_search_form_block",
 *   admin_label = @Translation("Canada Search")
 * )
 */ ?>
<section id="wb-srch" class="col-xs-6 text-right visible-md visible-lg">
    <h2>Search</h2>
    <form action="https://www.canada.ca/en/sr/srb.html?q=candy" method="get" name="cse-search-box" role="search" class="form-inline">
        <div class="form-group">
            <label for="wb-srch-q" class="wb-inv">Search website</label>

            <input id="wb-srch-q" list="wb-srch-q-ac" class="wb-srch-q form-control" name="q" value="" size="27" maxlength="150" placeholder="Search Canada.ca" type="search">
            <datalist id="wb-srch-q-ac">
                <!--[if lte IE 9]><select><![endif]-->
                <!--[if lte IE 9]></select><![endif]-->
            </datalist>
        </div>
        <div class="form-group submit">
            <button type="submit" id="wb-srch-sub" class="btn btn-primary btn-small" name="wb-srch-sub"><span class="glyphicon-search glyphicon"></span><span class="wb-inv">Search</span></button>

        </div>
    </form>
</section>