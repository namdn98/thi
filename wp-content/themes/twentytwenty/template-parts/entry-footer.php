<div class='container faqs'>
   <div class='row justify-content-center'>
      <?php global $redux_demo; echo  $redux_demo['hosting-faqs-title'] ?>
   </div>
   <div class='row'>
      <div class='col-12'>
         <div class='accordion faqs-form' id='accordionExample'>
            <?php $i=0;  $cat_id =  $redux_demo['cat-hoi-dap'] ?>
            <?php $catPost = get_posts(get_cat_ID($cat_id)); foreach ($catPost as $post) : setup_postdata($post); $i++ ?>
            <div class='card'>
               <div class='card-header' id='heading_<?php echo $i ?>'>
                  <button class='btn btn-link text-left' type='button' data-toggle='collapse'
                     data-target='#collapse_<?php echo $i ?>' aria-expanded='true'
                     aria-controls='collapse_<?php echo $i ?>'>

                     <?php the_title(); ?>

                  </button>
               </div>

               <div id='collapse_<?php echo $i ?>' class='p-3 collapse <?php if($i == 1) echo 'show' ?>'
                  aria-labelledby='heading_<?php echo $i ?>' data-parent='#accordionExample'>
                  <?php echo the_content(); ?>
               </div>

            </div>
            <?php  endforeach;?>

         </div>
      </div>
   </div>
</div>
<div class='container-fluid px-0 mt-5'>
   <div class='row'>
      <div class='col-lg-12 pr-0 my-3 footer text-white'>
         <div class='row px-5 my-3'>
            <div class='col-lg-3 col-6'>
               <?php global $redux_demo; echo  $redux_demo['hosting-footer-content-col-1'] ?>
            </div>

            <div class='col-lg-3 col-6 '>
               <?php global $redux_demo; echo  $redux_demo['hosting-footer-content-col-2'] ?>
            </div>

            <div class='col-lg-3 col-6'>
               <?php global $redux_demo; echo  $redux_demo['hosting-footer-content-col-3'] ?>
            </div>

            <div class='col-lg-3 col-6 '>
               <?php global $redux_demo; echo  $redux_demo['hosting-footer-content-col-4'] ?>
            </div>
         </div>
      </div>
   </div>

   <div class='row footer-block'>
      <div class='col-lg-8 col-sm-12'>
         <div class='my-2'>
            <?php global $redux_demo; echo  $redux_demo['footer-title'] ?>
         </div>

         <div class='my-2'>
            <?php global $redux_demo; echo  $redux_demo['footer-copyright'] ?>
         </div>
      </div>

      <div class='col-lg-4 col-sm-12'>
         <?php global $redux_demo; echo '<img src="'.$redux_demo['opt_header_logo']['url'].'">'; ?>
      </div>
   </div>

</div>

<script src='/thi/wp-content/themes/twentytwenty/fontawesome/fontawesome-free-5.13.1-web/js/all.js'></script>