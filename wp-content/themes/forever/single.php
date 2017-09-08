<?php get_header(); ?>
<script
    type="text/javascript"
    async defer
    src="//assets.pinterest.com/js/pinit.js"
></script>
<div class="main single">
    <?php
if (have_posts()): ?>
        <?php
    while (have_posts()):
        the_post(); ?>
        <div class="post col-lg-12">
            <h1 class="post-title"><?php the_title(); ?></h1>
                       
                        <svg id="svg-pinit"
                      viewBox="0 0 48 49"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      xml:space="preserve">
                    
                      <g id="main-heart"><path
                        id="Heart"
                        d="M23.982,8.505c5.02,-9.442 15.125,-9.475 20.194,-4.778c5.069,4.697 5.101,14.124 0.081,23.567c-3.081,6.209 -10.958,14.782 -17.114,20.266c-1.672,1.49 -3.034,1.431 -4.79,0.018c-6.435,-5.175 -15.394,-13.965 -18.517,-20.155c-5.085,-9.41 -5.117,-18.837 -0.081,-23.566c5.037,-4.73 15.142,-4.762 20.227,4.648Z"
                        style="fill:#e223b3;">
                          <animate attributeName="fill" values="red;blue;red" dur="10s" repeatCount="indefinite" />
                           
                          </path>
                        <g transform="matrix(1,0,0.182324,1,5.97255,0)">
                          <text x="2.958px" y="36.089px" style="font-family:'Chalkduster', cursive;font-size:15.177px;fill:#fff;">I<tspan x="12.305px " y="36.089px ">T</tspan>
                          </text>
                        </g>
                        <text x="4.511px" y="21.545px" style="font-family:'Chalkduster', cursive;font-size:13.591px;fill:#fff;">P<tspan x="18.31px 29.877px " y="21.545px 21.545px ">IN</tspan>
                        </text>
                      </g>
                    
                    </svg>
            <div class="post-content col-lg-10 col-lg-offset-1">
                <?php the_content(); ?>
            </div>

        </div>
        <?php
    endwhile; ?>
    <?php
endif; ?>
</div>
<a href="https://www.pinterest.com/pin/create/button/"
  data-pin-do="buttonBookmark"
    data-pin-custom="true" id="pinit">
 
</a>
<div id="delimiter"></div>
<?php get_footer(); ?>

<script type="text/javascript" >
        (function(){
                     var link = document.getElementById("pinit"),
                     svgHeart = document.getElementById("main-heart");
                
                    if(svgHeart && link){
                        svgHeart.addEventListener("click",function(e){
                             e.preventDefault;
                            link.click();
                            });
                    }
                })();
</script>