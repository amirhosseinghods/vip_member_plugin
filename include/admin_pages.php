<?php

function wpvip_dashboard(){
        
        include WPVIP_TPL.'admin/dashboard/dashboard.php';
        
}
function wpvip_plans_page(){
        $succes=false;
        global $wpdb,$table_prefix;
        if(isset($_POST['submit'])){

                $title = sanitize_text_field($_POST['title']);
                $price = sanitize_text_field($_POST['price']);
                $credit = sanitize_text_field($_POST['credit']);

                $wpdb->insert($table_prefix.'vip_plans',array(
                        'title' => $title,
                        'price' => $price,
                        'credit'=> $credit
                ),array(
                        '%s',
                        '%d',
                        '%d'
                ));
                //wp_redirect(admin_url('admin.php?page=wpvip_admin_plans'));
                //exit();
                $succes = true;
                $msg = "اطلاعات با موفقیت ذخیره شد";
              
        }
        if($succes==true){
                echo $msg;
        }
        
        $action = isset($_GET['action']) && 
        !empty($_GET['action']) &&
        ctype_alpha($_GET['action'])? $_GET['action']:null;
     
     
        
        switch($action){
              case 'edit':
                $item_id = isset($_GET['item_id']) && ctype_digit($_GET['item_id'])
                ? intval($_GET['item_id'])
                :null;
                if ( $item_id ) {
                        $plan_edit = $wpdb->get_row( $wpdb->prepare( "SELECT * 
                                                                        FROM {$table_prefix}vip_plans 
                                                                        WHERE plan_ID=%d", $item_id ) );}
                 $price_edit = $wpdb->get_row( $wpdb->prepare( "SELECT * 
                 FROM {$table_prefix}vip_plans 
                 WHERE 	price=%d", $price ) );

           include WPVIP_TPL.'admin/plans/edit.php';           
              break;
              
              default:
              $plans = $wpdb->get_results("SELECT *
                                        FROM {$table_prefix}vip_plans");
              include WPVIP_TPL.'admin/plans/plans.php';
        break;
}

include WPVIP_INC.'front-end.php';
     //   dd($action);
        

}