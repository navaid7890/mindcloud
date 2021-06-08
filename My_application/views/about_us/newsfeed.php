        
<style>
div#add-comm-13 {
    padding: 1% 0 4%;
}

.news-feed-comment-form a {
    margin-left: 0px;
    font-size: 16px;
    color: #1BA8E8;
    font-weight: 600;
    margin-top: 24px;
}
</style>
        <section class="createPostSec hding-3">
            <div class="container">
                <div class="create-post">
                    <div class="create-post-head">
                        <h3>Create your new post</h3>
                    </div>
                    <div class="create-post-body">
                        
                                
      	<form action="<?=l('about_us/ajax_save_post')?>" method="post" id="form-post-status">
         
                            <div class="fld-post">
                            <input type="hidden" name="post[post_type]" value="1">
                                <input type="text" placeholder="Type Your Post Title" name="post[post_title]" required="">
                            </div>

                            <div class="fld-comment">
                                <textarea placeholder="Description" name="post[post_description]" required=""></textarea>
                            </div>

                            <div class="fld-btn">
                                <input type="submit" value="Send" id='form-post-status-btn'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-feedSec hding-3">
            <div class="container">
                <div class="news-head">
                    <h3>News Feed</h3>
                </div>
                <div class="space"><br><br></div>

                <ul class="loadMore post-and-comment ">

                <? if(isset($feeds) AND array_filled($feeds)) :
				foreach($feeds as $key=>$value):
                   $ck=$this->model_user->find_by_pk($value['post_user_id']);
             
					// Set params
					// $post_params = array();
		            // $post_params['where']['post_like_user_id'] = $this->userid;
		            // $post_params['where']['post_like_post_id'] = $value['post_id'];
		            // $already_exits_data = $this->model_post_like->find_count($post_params);
                  
                    // $post_params1 = array();
		            // $post_params1['where']['post_comment_user_id'] = $this->userid;
		            // $post_params1['where']['post_comment_post_id'] = $value['post_id'];
		            // $already_exits_data1 = $this->model_post_comment->find_count($post_params1);

                    $post_params2 = array();
		            $post_params2['where']['post_like_post_id'] = $value['post_id'];
		            $a = $this->model_post_like->find_count_active($post_params2);


                    $post_params3 = array();
		   
		            $post_params3['where']['post_comment_post_id'] = $value['post_id'];
		            $b = $this->model_post_comment->find_count($post_params3);

                   

   
				?>
                    <li class="items">
                        <div class="news-feed-box">
                        <h3>Recently Added</h3>
                            <div class="news-feed-user">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="user-profile">
                                            
                                            <div class="user-img">
                                                <img src="<?=get_image($value['signup_profile_image'],$value['signup_profile_image_path'])?>" alt="">
                                            </div>
                                            <div class="user-name">
                                                <p><?=ucfirst($ck['user_firstname'])?></p>
                                            </div>
                                        </div>
                                    </div>

                                 
                                </div>
                            </div>
                            <div class="space"><br></div>

                            <div class="news-feed-post">
                                <h3><?=$value['post_title']?></h3>
                                <div class="space"><br></div>
                                <p><?=$value['post_description']?></p>
                            </div>

                            <div class="news-feed-feedback">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                    <div class="news-feed-like">
                                            <a href="javascript:void(0);" class='like_post <?=($a > 0) ? 'like_post_fill' : ''?>' data-post_id="<?=$value['post_id']?>"><i class="fas fa-heart"></i> Like <span><?=$a?></span></a>
                                            <a href="javascript:void(0);" class="comment-posted"><i class="fal fa-comment-alt"></i> Comments <span><?=$b?></span></a>
                                     </div>
                              
                                    </div>

                                    <div class="col-md-6">
                                        <div class="news-feed-time">
                                            <h6><?=time_elapsed_string($value['post_createdon'])?></h6>
                                        </div>
                                    </div>
                                </div>   
                            </div>

                            <div class="news-feed-comment-form">
               
                                <div class="user-profile">
                                    <div class="user-img">
                                        <img src="<?=get_image($account_user['ui_profile_image'],$account_user['ui_profile_image_path'])?>" alt="">
                                    </div>
                                    <div class="user-comment-input">
                                    <div id='add-comm-<?=$value['post_id']?>'></div>
                                        <form>
                                            <div class="flde-comnt-user">

							                    <input type="hidden" name="post_comment_post_id" value="<?=$value['post_id']?>">
                                                <input type="text"  placeholder="Write your comment" name="post_comment_user_comment"> <a href="javascript:void(0);" class="comment-posted post_comment" style="float:right; position:absolute; margin-left:-27px;"><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                  
                                        </form>
                                    </div>
                                </div>
                           
                            </div>
                            <div class="space"><br></div>

                            <div class="posted-comment">    
                         
                                <div class="space"><br><br></div>

                        <? if(isset($value['comments']) AND array_filled($value['comments'])):?>
						<? foreach($value['comments'] as $k=>$v):
                    
                               $all=$this->model_user->find_by_pk($v['post_comment_user_id']);
                            	$post_params = array();
                               // $post_params['where']['post_like_user_id'] = $this->userid;
                                $post_params['where']['post_like_post_id'] = $v['post_comment_post_id'];
                                $already_exits_data = $this->model_post_like->find_count($post_params);
 
                            ?>
                                <div class="news-feed-comnt-post">
                                    <div class="user-profile">
                                        <div class="user-img">
                                            <img src="<?=l($v['image'])?>" alt="">
                                        </div>
                                        <div class="user-name">
                                            <p><?=ucfirst($all['user_firstname'])?></p>
                                        </div>
                                    </div>  
                                    <div class="space"><br></div>
                                    <div class="news-feed-comnted">
                                        <div class="news-feed-post">
                                            <p><?=$v['post_comment_user_comment']?></p>
                                        </div>

                                        <div class="news-feed-feedback">
                                            <div class="row align-items-center">
                                                <div class="col-md-2">
                                                    <div class="news-feed-like">
                                                        <a href="javascript:void(0);" class='like_post <?=($already_exits_data > 0) ? 'like_post_fill' : ''?>' data-post_id="<?=$value['post_id']?>"><i class="fal fa-heart"></i> Like </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-10">
                                                    <div class="news-feed-time">
                                                        <h6><?=time_elapsed_string($v['post_comment_createdon'])?></h6>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>

                                </div>

                                <? endforeach;endif;?>


                            </div>

                        </div>
                    </li>
                    <? endforeach;endif;?>
            
                </ul>

            </div>
        </section>