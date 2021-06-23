<style>
#forum_category,#forum_categorys{
    /* width: 100%; */
    height: 100%;
    padding: 0px 20px;
    font-size: 18px;
    color: #5C677D;
    margin-right: 10px;
}

</style>

<div class="col-md-10">
<select id='forum_category'>
                           <option>All Experts</option>
                           <? if (isset($ex) and array_filled($ex)) : ?>
                              <? foreach ($ex as $key => $value) : ?>
                                 <option value="<?= $value['expert_id'] ?>" <?= $this->input->get('expert') == $value['expert_id'] ? 'selected=""' : '' ?>>
                                    <?= $value['expert_name'] ?>
                                 </option>
                              <? endforeach; ?>
                           <? endif; ?>
                        </select>


                        <select id='forum_categorys'>
                           <option>All Category</option>
                           <? if (isset($ct) and array_filled($ct)) : ?>
                              <? foreach ($ct as $key => $value) : ?>
                                 <option value="<?= $value['category_id'] ?>" <?= $this->input->get('category') == $value['category_id'] ? 'selected=""' : '' ?>>
                                    <?= $value['category_name'] ?>
                                 </option>
                              <? endforeach; ?>
                           <? endif; ?>
                        </select>
<a id='on_vacation' class="btn btn-primary pull-right" href="javascript:void(0);">Book Slots</a>
	<div class="clearfix"></div>
		<h2>Your Schedule </h2>

		<div id='calendar'></div>

</div>


<script type="text/javascript">
   $("body").on('change', '#forum_category', function() {
      var id = $(this).val();
      var sel = $("#forum_categorys").val();
      if (id > 0 && sel>0) {
		window.location="<?=la('')?>?expert="+id+"&category="+sel;
         //window.location.href = base_url + "admin?expert=" + id;
      } else {
		window.location="<?=la('')?>";
      }
   });
</script>