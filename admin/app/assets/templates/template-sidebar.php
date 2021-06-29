<!-- Start Navbar -->

<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered default navbar-vertical-aside-initialized">
  <div class="navbar-vertical-container">
    <div class="navbar-vertical-footer-offset">
      <div class="navbar-brand-wrapper justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= $base_URI; ?>" aria-label="Wise Education">
          <img class="navbar-brand-logo" src="<?= $base_URI; ?>/app/assets/img/logos/wise-education.png" alt="Wise Education Group" />
          <img class="navbar-brand-logo-mini" src="<?= $base_URI; ?>/app/assets/img/logos/wise-education.png" alt="Wise Education Group" />
        </a>
        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
          <i class="tio-clear tio-lg"></i>
        </button>
        <!-- End Navbar Vertical Toggle -->
      </div>

      <!-- Content -->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav navbar-nav-lg nav-tabs">
          <!-- Dashboards -->
          <!-- <li class="nav-item"> -->
          <!--active-->
          <!-- <a class="js-nav-tooltip-link nav-link" href="javascript:void(0);" title="Dashboard">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
            </a> -->
          <!-- </li> -->
          <!-- End Dashboards -->

          <li class="nav-item">
            <small class="nav-subtitle" title="Pages">Content</small>
            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
          </li>

          <!-- Country -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Country">
              <i class="tio-globe nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Country</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="javascript:void(0);" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add Country</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('countries-list'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View Countries</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Country -->

          <!-- Locations -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Pages">
              <i class="tio-poi-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Location</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="javascript:void(0);" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add Location</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="javascript:void(0);" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View Location</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Locations -->

          <!-- Programs -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Authentication">
              <i class="tio-document-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Programs</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="javascript:void(0);" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add Program</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="javascript:void(0);" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View Program</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- End Programs -->

          <!-- Start University -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Universities">
              <i class="tio-neighborhood nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">University</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('university-add'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add University</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('universities-list'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View Universities</span>
                </a>
              </li>

            </ul>
          </li>
          <!-- Start University -->

          <!-- Start Gallery -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Gallery">
              <i class="tio-photo-gallery nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Gallery</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('gallery-add'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add Gallery</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('universities-list'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View Galleries</span>
                </a>
              </li>

            </ul>
          </li>
          <!-- End Gallery -->

          <!-- Start FAQ -->
          <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="FAQ">
              <i class="tio-help nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">FAQ</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('faq-add'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">Add FAQ</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link " href="<?= $router->generate('universities-list'); ?>" title="Overview">
                  <span class="tio-circle-outlined nav-indicator-icon"></span>
                  <span class="text-truncate">View FAQ</span>
                </a>
              </li>

            </ul>
          </li>
          <!-- End FAQ -->

          <!-- Help -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Help">
              <i class="tio-home-vs-1-outlined nav-icon"></i>
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="Resources &amp; tutorials">
                  <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Keyboard shortcuts">
                  <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Connect other apps">
                  <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="What's new?">
                  <i class="tio-gift dropdown-item-icon"></i> What's new?
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Contact support">
                  <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                </a>
              </li>
            </ul>
          </li>
          <!-- End Help -->

          <!-- Language -->
          <li class="navbar-vertical-aside-has-menu nav-footer-item ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:void(0);" title="Language">
              <img class="avatar avatar-xss avatar-circle" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
              <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (US)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                  English (US)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="English (UK)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                  English (UK)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Deutsch">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                  Deutsch
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Dansk">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                  Dansk
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="Italiano">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                  Italiano
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" title="中文 (繁體)">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                  中文 (繁體)
                </a>
              </li>
            </ul>
          </li>
          <!-- End Language -->
        </ul>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <div class="navbar-vertical-footer">
        <ul class="navbar-vertical-footer-list">
          <li class="navbar-vertical-footer-list-item">
            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:void(0);" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#styleSwitcherDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                  &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                  &quot;hasOverlay&quot;: true,
                  &quot;smartPositionOff&quot;: true
                 }" data-hs-unfold-target="#styleSwitcherDropdown" data-hs-unfold-invoker="">
                <i class="tio-tune"></i>
              </a>
            </div>
            <!-- End Unfold -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Other Links -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:void(0);" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#otherLinksDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;slideInDown&quot;,
                  &quot;hideOnScroll&quot;: true
                 }" data-hs-unfold-target="#otherLinksDropdown" data-hs-unfold-invoker="">
                <i class="tio-help-outlined"></i>
              </a>

              <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInDown" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                <span class="dropdown-header">Help</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-book-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-command-key dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-alt dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-gift dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                </a>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header">Contacts</span>
                <a class="dropdown-item" href="#">
                  <i class="tio-chat-outlined dropdown-item-icon"></i>
                  <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                </a>
              </div>
            </div>
            <!-- End Other Links -->
          </li>

          <li class="navbar-vertical-footer-list-item">
            <!-- Language -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:void(0);" data-hs-unfold-options="{
                  &quot;target&quot;: &quot;#languageDropdown&quot;,
                  &quot;type&quot;: &quot;css-animation&quot;,
                  &quot;animationIn&quot;: &quot;slideInDown&quot;,
                  &quot;hideOnScroll&quot;: true
                 }" data-hs-unfold-target="#languageDropdown" data-hs-unfold-invoker="">
                <img class="avatar avatar-xss avatar-circle" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
              </a>

              <div id="languageDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-reverse-y" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInDown" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
                <span class="dropdown-header">Select language</span>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (US)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="English">English (UK)</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Deutsch">Deutsch</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Dansk">Dansk</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="Italiano">Italiano</span>
                </a>
                <a class="dropdown-item" href="#">
                  <img class="avatar avatar-xss avatar-circle mr-2" src="<?= $base_URI; ?>/app/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                  <span class="text-truncate pr-2" title="中文 (繁體)">中文 (繁體)</span>
                </a>
              </div>
            </div>
            <!-- End Language -->
          </li>
        </ul>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</aside>

<!-- End Navbar -->