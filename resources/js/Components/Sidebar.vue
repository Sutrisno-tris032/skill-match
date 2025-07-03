<template>
  <!-- Left Sidebar Start -->
  <div class="app-sidebar-menu">
    <div class="h-100 menuitem-active" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: 0px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              tabindex="0"
              role="region"
              aria-label="scrollable content"
              style="height: 100%; overflow: hidden scroll"
            >
              <div class="simplebar-content" style="padding: 0px">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                  <div class="logo-box">
                    <a href="index.html" class="logo logo-light">
                      <span class="logo-sm">
                        <img
                          src="/assets/images/logo-sm.png"
                          alt=""
                          height="22"
                        />
                      </span>
                      <span class="logo-lg">
                        <img
                          src="/assets/images/logo-light.png"
                          alt=""
                          height="24"
                        />
                      </span>
                    </a>
                    <a href="index.html" class="logo logo-dark">
                      <span class="logo-sm">
                        <img
                          src="/assets/images/logo-sm.png"
                          alt=""
                          height="22"
                        />
                      </span>
                      <span class="logo-lg">
                        <img
                          src="/assets/images/logo-dark.png"
                          alt=""
                          height="24"
                        />
                      </span>
                    </a>
                  </div>

                  <ul id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li class="menuitem-active" v-for="menu in menus" :key="menu.id">
                      <a
                        href="#sidebarDashboards"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                        class="collapsed"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-home"
                        >
                          <path
                            d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                          ></path>
                          <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span> {{ menu.name }} </span>
                        <!-- <span class="menu-arrow"></span> -->
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: auto; height: 823px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar"
          style="width: 0px; display: none"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: visible"
      >
        <div
          class="simplebar-scrollbar"
          style="
            height: 196px;
            transform: translate3d(0px, 0px, 0px);
            display: block;
          "
        ></div>
      </div>
    </div>
  </div>
  <!-- Left Sidebar End -->
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  name: "Sidebar",
  components: {
    Link,
  },
  props: {
    // menus: Array,
    menus: {
      type: Array,
      required: true,
    },
  }
};
</script>