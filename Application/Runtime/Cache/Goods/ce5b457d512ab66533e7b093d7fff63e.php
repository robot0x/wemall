<?php if (!defined('THINK_PATH')) exit();?><script>
    $(document).ready(function(){
         $("#goodsAddForm").validate({
        
           rules:{ 
               name:{ required: true },
               international_price:{ required:true },
               purchasing_price:{ required:true }, 
               arrive_days:{ required:true }, 
               direct_selling_commission:{ required:true }, 
               line_selling_commission:{ required:true }, 
               domestic_transportation_expenses:{ required:true }, 
               weight:{ required:true }, customs:{ required:true }, 
               discount_way:{ required:true }, 
               discount_amount:{ required:true }, 
               shop_superior_limit:{ required:true }, 
               shop_lower_limit:{ required:true }, 
               reorder:{ required:true }, 
               discribe:{ required:true } }
        
    });
});
    
    
</script>