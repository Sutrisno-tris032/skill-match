<template>
  <div id="app-layout">
    <!-- topbar start -->
    <Topbar />
    <!-- topbar end -->

    <!-- left sidebar start -->
    <Sidebar :menus="props.menus"/>
    <!-- left sidebar end -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

      <!-- get content data start -->
      <div class="content">
        <slot />
      </div>
      <!-- get content data end -->

      <!-- footer start -->
      <!-- <Footer /> -->
      <!-- footer end -->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
  </div>
</template>
<script>
import Topbar from "@/Components/Topbar.vue";
import Sidebar from "@/Components/Sidebar.vue";
import Footer from "@/Components/Footer.vue";
import { usePage } from '@inertiajs/vue3'


export default {
  name: "AdminLayout",
  components: {
    Topbar,
    Sidebar,
    Footer,
    usePage
  },
  setup() {
    const { props } = usePage();
    return { props };
  }
  // mounted() {
  //     document.body.setAttribute('data-menu-color', 'light');
  //     document.body.setAttribute('data-sidebar', 'default');
  // }
};
</script>