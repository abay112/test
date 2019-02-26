<?php
        $link = $_SERVER['REQUEST_URI'];
        echo "<ul class='sidebar-menu' data-widget='tree'>";
        $main_menu = $this->db->get_where('menu_table', array('is_main_menu' => 0));
        foreach ($main_menu->result() as $main) 
        {
            $sub_menu = $this->db->get_where('menu_table', array('is_main_menu' => $main->id));
            if ($sub_menu->num_rows() > 0)  
            {
                 echo "<li class='treeview'> 
                    <a href=".$main->link.">
                    <i class='".$main->icon."'></i><span>".$main->judul_menu."</span>
                        <span class='pull-right-container'>
                         <i class='fa fa-angle-left pull-right'></i></a></span>";

                  echo "<ul class='treeview-menu'>";
                  foreach ($sub_menu->result() as $sub)
                  {
                    echo "<li class='active'> 
                    <a href=".$sub->link.">
                    <i class='".$sub->icon."'></i>".$sub->judul_menu."</a>
                  </li>";
                  }
                
                    echo "</li></ul>";
            }
            else 
            {       
                 echo "<li> 
                    <a href=".$main->link.">
                    <i class='".$main->icon."'></i><span>".$main->judul_menu."</span></a>
                    <span class='pull-right-container'>
                         <i class='fa fa-angle-left pull-right'></i></a></span>
                  </li>";
            }
        }

        echo "</ul>";
    ?>

<script>
 var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
   return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
   return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>