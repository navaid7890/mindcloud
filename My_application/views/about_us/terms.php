<style>
   .privacyArea h3 {
      font-size: 23px;
      margin: 10px 0px;
      color: hsl(220, 29%, 28%);
   }

   .privacyArea h1 {
      font-size: 40px;
      margin: 15px 0px;
      color: hsl(220, 29%, 28%);
   }

   .privacyArea ul {
      font-size: 20px;
      line-height: normal;
      color: hsl(220, 29%, 28%);
      list-style: circle;
      padding: revert;
   }

   .privacyArea table {
      width: 100% !important;
      margin: 15px 0px;
   }

   .privacyArea td {
      border: 1px solid #ccc;
      vertical-align: middle;
      padding: 15px;
   }
</style>
<section class="hding-2 para">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="privacyArea">
               <?= html_entity_decode($terms['cms_page_title']) ?>
               <?= html_entity_decode($terms['cms_page_content']) ?>
            </div>
         </div>
      </div>
   </div>
</section>