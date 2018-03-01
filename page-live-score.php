<?php get_header(); ?>

	<div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
        	<div class="blog-post">
            	<h1 class="blog-post-title">
              		<?php the_title(); ?>       
            	</h1>
            </div><!-- /.blog-post -->

            <h3>Bangor 234-5</h3>
			<div class="col-md-6">
				<h5><b>Batting</b></h5>
				<table class="live-score-table" style="width: 100%; color: #cc9600;">
                	<tbody class="first-live-score-body">
						<tr>
							<td><?php $row_1_name_1 = get_post_meta($post->ID, '1-row-1-name', true); echo $row_1_name_1;?></td>
							<td><?php $row_1_score_1 = get_post_meta($post->ID, '1-row-1-score', true); echo $row_1_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_2_name_1 = get_post_meta($post->ID, '1-row-2-name', true); echo $row_2_name_1;?></td>
							<td><?php $row_2_score_1 = get_post_meta($post->ID, '1-row-2-score', true); echo $row_2_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_3_name_1 = get_post_meta($post->ID, '1-row-3-name', true); echo $row_3_name_1;?></td>
							<td><?php $row_3_score_1 = get_post_meta($post->ID, '1-row-3-score', true); echo $row_3_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_4_name_1 = get_post_meta($post->ID, '1-row-4-name', true); echo $row_4_name_1;?></td>
							<td><?php $row_4_score_1 = get_post_meta($post->ID, '1-row-4-score', true); echo $row_4_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_5_name_1 = get_post_meta($post->ID, '1-row-5-name', true); echo $row_5_name_1;?></td>
							<td><?php $row_5_score_1 = get_post_meta($post->ID, '1-row-5-score', true); echo $row_5_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_6_name_1 = get_post_meta($post->ID, '1-row-6-name', true); echo $row_6_name_1;?></td>
							<td><?php $row_6_score_1 = get_post_meta($post->ID, '1-row-6-score', true); echo $row_6_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_7_name_1 = get_post_meta($post->ID, '1-row-7-name', true); echo $row_7_name_1;?></td>
							<td><?php $row_7_score_1 = get_post_meta($post->ID, '1-row-7-score', true); echo $row_7_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_8_name_1 = get_post_meta($post->ID, '1-row-8-name', true); echo $row_8_name_1;?></td>
							<td><?php $row_8_score_1 = get_post_meta($post->ID, '1-row-8-score', true); echo $row_8_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_9_name_1 = get_post_meta($post->ID, '1-row-9-name', true); echo $row_9_name_1;?></td>
							<td><?php $row_9_score_1 = get_post_meta($post->ID, '1-row-9-score', true); echo $row_9_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_10_name_1 = get_post_meta($post->ID, '1-row-10-name', true); echo $row_10_name_1;?></td>
							<td><?php $row_10_score_1 = get_post_meta($post->ID, '1-row-10-score', true); echo $row_10_score_1;?></td>
						</tr>
						<tr>
							<td><?php $row_11_name_1 = get_post_meta($post->ID, '1-row-11-name', true); echo $row_11_name_1;?></td>
							<td><?php $row_11_score_1 = get_post_meta($post->ID, '1-row-11-score', true); echo $row_11_score_1;?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				<h5><b>Bowling</b></h5>
				<table class="first-live-score-table" style="width: 100%; color: #cc9600;">
                	<tbody class="first-live-score-body">
                  		<tr>
							<td><?php $row_1_bowl_name_1 = get_post_meta($post->ID, '1-row-1-bowl-name', true); echo $row_1_bowl_name_1;?></td>
							<td><?php $row_1_bowl_overs_1 = get_post_meta($post->ID, '1-row-1-bowl-overs', true); echo $row_1_bowl_overs_1;?></td>
							<td><?php $row_1_bowl_maidens_1 = get_post_meta($post->ID, '1-row-1-bowl-maidens', true); echo $row_1_bowl_maidens_1;?></td>
							<td><?php $row_1_bowl_runs_1 = get_post_meta($post->ID, '1-row-1-bowl-runs', true); echo $row_1_bowl_runs_1;?></td>
							<td><?php $row_1_bowl_wickets_1 = get_post_meta($post->ID, '1-row-1-bowl-wickets', true); echo $row_1_bowl_wickets_1;?></td>
							<td><?php $row_1_bowl_economy_1 = get_post_meta($post->ID, '1-row-1-bowl-economy', true); echo $row_1_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_2_bowl_name_1 = get_post_meta($post->ID, '1-row-2-bowl-name', true); echo $row_2_bowl_name_1;?></td>
							<td><?php $row_2_bowl_overs_1 = get_post_meta($post->ID, '1-row-2-bowl-overs', true); echo $row_2_bowl_overs_1;?></td>
							<td><?php $row_2_bowl_maidens_1 = get_post_meta($post->ID, '1-row-2-bowl-maidens', true); echo $row_2_bowl_maidens_1;?></td>
							<td><?php $row_2_bowl_runs_1 = get_post_meta($post->ID, '1-row-2-bowl-runs', true); echo $row_2_bowl_runs_1;?></td>
							<td><?php $row_2_bowl_wickets_1 = get_post_meta($post->ID, '1-row-2-bowl-wickets', true); echo $row_2_bowl_wickets_1;?></td>
							<td><?php $row_2_bowl_economy_1 = get_post_meta($post->ID, '1-row-2-bowl-economy', true); echo $row_2_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_3_bowl_name_1 = get_post_meta($post->ID, '1-row-3-bowl-name', true); echo $row_3_bowl_name_1;?></td>
							<td><?php $row_3_bowl_overs_1 = get_post_meta($post->ID, '1-row-3-bowl-overs', true); echo $row_3_bowl_overs_1;?></td>
							<td><?php $row_3_bowl_maidens_1 = get_post_meta($post->ID, '1-row-3-bowl-maidens', true); echo $row_3_bowl_maidens_1;?></td>
							<td><?php $row_3_bowl_runs_1 = get_post_meta($post->ID, '1-row-3-bowl-runs', true); echo $row_3_bowl_runs_1;?></td>
							<td><?php $row_3_bowl_wickets_1 = get_post_meta($post->ID, '1-row-3-bowl-wickets', true); echo $row_3_bowl_wickets_1;?></td>
							<td><?php $row_3_bowl_economy_1 = get_post_meta($post->ID, '1-row-3-bowl-economy', true); echo $row_3_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_4_bowl_name_1 = get_post_meta($post->ID, '1-row-4-bowl-name', true); echo $row_4_bowl_name_1;?></td>
							<td><?php $row_4_bowl_overs_1 = get_post_meta($post->ID, '1-row-4-bowl-overs', true); echo $row_4_bowl_overs_1;?></td>
							<td><?php $row_4_bowl_maidens_1 = get_post_meta($post->ID, '1-row-4-bowl-maidens', true); echo $row_4_bowl_maidens_1;?></td>
							<td><?php $row_4_bowl_runs_1 = get_post_meta($post->ID, '1-row-4-bowl-runs', true); echo $row_4_bowl_runs_1;?></td>
							<td><?php $row_4_bowl_wickets_1 = get_post_meta($post->ID, '1-row-4-bowl-wickets', true); echo $row_4_bowl_wickets_1;?></td>
							<td><?php $row_4_bowl_economy_1 = get_post_meta($post->ID, '1-row-4-bowl-economy', true); echo $row_4_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_5_bowl_name_1 = get_post_meta($post->ID, '1-row-5-bowl-name', true); echo $row_5_bowl_name_1;?></td>
							<td><?php $row_5_bowl_overs_1 = get_post_meta($post->ID, '1-row-5-bowl-overs', true); echo $row_5_bowl_overs_1;?></td>
							<td><?php $row_5_bowl_maidens_1 = get_post_meta($post->ID, '1-row-5-bowl-maidens', true); echo $row_5_bowl_maidens_1;?></td>
							<td><?php $row_5_bowl_runs_1 = get_post_meta($post->ID, '1-row-5-bowl-runs', true); echo $row_5_bowl_runs_1;?></td>
							<td><?php $row_5_bowl_wickets_1 = get_post_meta($post->ID, '1-row-5-bowl-wickets', true); echo $row_5_bowl_wickets_1;?></td>
							<td><?php $row_5_bowl_economy_1 = get_post_meta($post->ID, '1-row-5-bowl-economy', true); echo $row_5_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_6_bowl_name_1 = get_post_meta($post->ID, '1-row-6-bowl-name', true); echo $row_6_bowl_name_1;?></td>
							<td><?php $row_6_bowl_overs_1 = get_post_meta($post->ID, '1-row-6-bowl-overs', true); echo $row_6_bowl_overs_1;?></td>
							<td><?php $row_6_bowl_maidens_1 = get_post_meta($post->ID, '1-row-6-bowl-maidens', true); echo $row_6_bowl_maidens_1;?></td>
							<td><?php $row_6_bowl_runs_1 = get_post_meta($post->ID, '1-row-6-bowl-runs', true); echo $row_6_bowl_runs_1;?></td>
							<td><?php $row_6_bowl_wickets_1 = get_post_meta($post->ID, '1-row-6-bowl-wickets', true); echo $row_6_bowl_wickets_1;?></td>
							<td><?php $row_6_bowl_economy_1 = get_post_meta($post->ID, '1-row-6-bowl-economy', true); echo $row_6_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_7_bowl_name_1 = get_post_meta($post->ID, '1-row-7-bowl-name', true); echo $row_7_bowl_name_1;?></td>
							<td><?php $row_7_bowl_overs_1 = get_post_meta($post->ID, '1-row-7-bowl-overs', true); echo $row_7_bowl_overs_1;?></td>
							<td><?php $row_7_bowl_maidens_1 = get_post_meta($post->ID, '1-row-7-bowl-maidens', true); echo $row_7_bowl_maidens_1;?></td>
							<td><?php $row_7_bowl_runs_1 = get_post_meta($post->ID, '1-row-7-bowl-runs', true); echo $row_7_bowl_runs_1;?></td>
							<td><?php $row_7_bowl_wickets_1 = get_post_meta($post->ID, '1-row-7-bowl-wickets', true); echo $row_7_bowl_wickets_1;?></td>
							<td><?php $row_7_bowl_economy_1 = get_post_meta($post->ID, '1-row-7-bowl-economy', true); echo $row_7_bowl_economy_1;?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<h3>Holywood 123-7</h3>
			<div id="batting-second" class="col-md-6">
				<h5><b>Batting</b></h5>
				<table class="live-score-table" style="width: 100%; color: #cc9600;">
                	<tbody class="first-live-score-body">
                		<tr>
							<td><?php $row_1_name_2 = get_post_meta($post->ID, '2-row-1-name', true); echo $row_1_name_2;?></td>
							<td><?php $row_1_score_2 = get_post_meta($post->ID, '2-row-1-score', true); echo $row_1_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_2_name_2 = get_post_meta($post->ID, '2-row-2-name', true); echo $row_2_name_2;?></td>
							<td><?php $row_2_score_2 = get_post_meta($post->ID, '2-row-2-score', true); echo $row_2_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_3_name_2 = get_post_meta($post->ID, '2-row-3-name', true); echo $row_3_name_2;?></td>
							<td><?php $row_3_score_2 = get_post_meta($post->ID, '2-row-3-score', true); echo $row_3_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_4_name_2 = get_post_meta($post->ID, '2-row-4-name', true); echo $row_4_name_2;?></td>
							<td><?php $row_4_score_2 = get_post_meta($post->ID, '2-row-4-score', true); echo $row_4_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_5_name_2 = get_post_meta($post->ID, '2-row-5-name', true); echo $row_5_name_2;?></td>
							<td><?php $row_5_score_2 = get_post_meta($post->ID, '2-row-5-score', true); echo $row_5_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_6_name_2 = get_post_meta($post->ID, '2-row-6-name', true); echo $row_6_name_2;?></td>
							<td><?php $row_6_score_2 = get_post_meta($post->ID, '2-row-6-score', true); echo $row_6_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_7_name_2 = get_post_meta($post->ID, '2-row-7-name', true); echo $row_7_name_2;?></td>
							<td><?php $row_7_score_2 = get_post_meta($post->ID, '2-row-7-score', true); echo $row_7_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_8_name_2 = get_post_meta($post->ID, '2-row-8-name', true); echo $row_8_name_2;?></td>
							<td><?php $row_8_score_2 = get_post_meta($post->ID, '2-row-8-score', true); echo $row_8_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_9_name_2 = get_post_meta($post->ID, '2-row-9-name', true); echo $row_9_name_2;?></td>
							<td><?php $row_9_score_2 = get_post_meta($post->ID, '2-row-9-score', true); echo $row_9_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_10_name_2 = get_post_meta($post->ID, '2-row-10-name', true); echo $row_10_name_2;?></td>
							<td><?php $row_10_score_2 = get_post_meta($post->ID, '2-row-10-score', true); echo $row_10_score_2;?></td>
						</tr>
						<tr>
							<td><?php $row_11_name_2 = get_post_meta($post->ID, '2-row-11-name', true); echo $row_11_name_2;?></td>
							<td><?php $row_11_score_2 = get_post_meta($post->ID, '2-row-11-score', true); echo $row_11_score_2;?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="bowling-second" class="col-md-6">
				<h5><b>Bowling</b></h5>
				<table class="first-live-score-table" style="width: 100%; color: #cc9600;">
                	<tbody class="first-live-score-body">
                  		<tr>
							<td><?php $row_1_bowl_name_2 = get_post_meta($post->ID, '2-row-1-bowl-name', true); echo $row_1_bowl_name_2;?></td>
							<td><?php $row_1_bowl_overs_2 = get_post_meta($post->ID, '2-row-1-bowl-overs', true); echo $row_1_bowl_overs_2;?></td>
							<td><?php $row_1_bowl_maidens_2 = get_post_meta($post->ID, '2-row-1-bowl-maidens', true); echo $row_1_bowl_maidens_2;?></td>
							<td><?php $row_1_bowl_runs_2 = get_post_meta($post->ID, '2-row-1-bowl-runs', true); echo $row_1_bowl_runs_2;?></td>
							<td><?php $row_1_bowl_wickets_2 = get_post_meta($post->ID, '2-row-1-bowl-wickets', true); echo $row_1_bowl_wickets_2;?></td>
							<td><?php $row_1_bowl_economy_1 = get_post_meta($post->ID, '2-row-1-bowl-economy', true); echo $row_1_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_2_bowl_name_2 = get_post_meta($post->ID, '2-row-2-bowl-name', true); echo $row_2_bowl_name_2;?></td>
							<td><?php $row_2_bowl_overs_2 = get_post_meta($post->ID, '2-row-2-bowl-overs', true); echo $row_2_bowl_overs_2;?></td>
							<td><?php $row_2_bowl_maidens_2 = get_post_meta($post->ID, '2-row-2-bowl-maidens', true); echo $row_2_bowl_maidens_2;?></td>
							<td><?php $row_2_bowl_runs_2 = get_post_meta($post->ID, '2-row-2-bowl-runs', true); echo $row_2_bowl_runs_2;?></td>
							<td><?php $row_2_bowl_wickets_2 = get_post_meta($post->ID, '2-row-2-bowl-wickets', true); echo $row_2_bowl_wickets_2;?></td>
							<td><?php $row_2_bowl_economy_1 = get_post_meta($post->ID, '2-row-2-bowl-economy', true); echo $row_2_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_3_bowl_name_2 = get_post_meta($post->ID, '2-row-3-bowl-name', true); echo $row_3_bowl_name_2;?></td>
							<td><?php $row_3_bowl_overs_2 = get_post_meta($post->ID, '2-row-3-bowl-overs', true); echo $row_3_bowl_overs_2;?></td>
							<td><?php $row_3_bowl_maidens_2 = get_post_meta($post->ID, '2-row-3-bowl-maidens', true); echo $row_3_bowl_maidens_2;?></td>
							<td><?php $row_3_bowl_runs_2 = get_post_meta($post->ID, '2-row-3-bowl-runs', true); echo $row_3_bowl_runs_2;?></td>
							<td><?php $row_3_bowl_wickets_2 = get_post_meta($post->ID, '2-row-3-bowl-wickets', true); echo $row_3_bowl_wickets_2;?></td>
							<td><?php $row_3_bowl_economy_1 = get_post_meta($post->ID, '2-row-3-bowl-economy', true); echo $row_3_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_4_bowl_name_2 = get_post_meta($post->ID, '2-row-4-bowl-name', true); echo $row_4_bowl_name_2;?></td>
							<td><?php $row_4_bowl_overs_2 = get_post_meta($post->ID, '2-row-4-bowl-overs', true); echo $row_4_bowl_overs_2;?></td>
							<td><?php $row_4_bowl_maidens_2 = get_post_meta($post->ID, '2-row-4-bowl-maidens', true); echo $row_4_bowl_maidens_2;?></td>
							<td><?php $row_4_bowl_runs_2 = get_post_meta($post->ID, '2-row-4-bowl-runs', true); echo $row_4_bowl_runs_2;?></td>
							<td><?php $row_4_bowl_wickets_2 = get_post_meta($post->ID, '2-row-4-bowl-wickets', true); echo $row_4_bowl_wickets_2;?></td>
							<td><?php $row_4_bowl_economy_1 = get_post_meta($post->ID, '2-row-4-bowl-economy', true); echo $row_4_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_5_bowl_name_2 = get_post_meta($post->ID, '2-row-5-bowl-name', true); echo $row_5_bowl_name_2;?></td>
							<td><?php $row_5_bowl_overs_2 = get_post_meta($post->ID, '2-row-5-bowl-overs', true); echo $row_5_bowl_overs_2;?></td>
							<td><?php $row_5_bowl_maidens_2 = get_post_meta($post->ID, '2-row-5-bowl-maidens', true); echo $row_5_bowl_maidens_2;?></td>
							<td><?php $row_5_bowl_runs_2 = get_post_meta($post->ID, '2-row-5-bowl-runs', true); echo $row_5_bowl_runs_2;?></td>
							<td><?php $row_5_bowl_wickets_2 = get_post_meta($post->ID, '2-row-5-bowl-wickets', true); echo $row_5_bowl_wickets_2;?></td>
							<td><?php $row_5_bowl_economy_1 = get_post_meta($post->ID, '2-row-5-bowl-economy', true); echo $row_5_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_6_bowl_name_2 = get_post_meta($post->ID, '2-row-6-bowl-name', true); echo $row_6_bowl_name_2;?></td>
							<td><?php $row_6_bowl_overs_2 = get_post_meta($post->ID, '2-row-6-bowl-overs', true); echo $row_6_bowl_overs_2;?></td>
							<td><?php $row_6_bowl_maidens_2 = get_post_meta($post->ID, '2-row-6-bowl-maidens', true); echo $row_6_bowl_maidens_2;?></td>
							<td><?php $row_6_bowl_runs_2 = get_post_meta($post->ID, '2-row-6-bowl-runs', true); echo $row_6_bowl_runs_2;?></td>
							<td><?php $row_6_bowl_wickets_2 = get_post_meta($post->ID, '2-row-6-bowl-wickets', true); echo $row_6_bowl_wickets_2;?></td>
							<td><?php $row_6_bowl_economy_1 = get_post_meta($post->ID, '2-row-6-bowl-economy', true); echo $row_6_bowl_economy_1;?></td>
						</tr>
						<tr>
							<td><?php $row_7_bowl_name_2 = get_post_meta($post->ID, '2-row-7-bowl-name', true); echo $row_7_bowl_name_2;?></td>
							<td><?php $row_7_bowl_overs_2 = get_post_meta($post->ID, '2-row-7-bowl-overs', true); echo $row_7_bowl_overs_2;?></td>
							<td><?php $row_7_bowl_maidens_2 = get_post_meta($post->ID, '2-row-7-bowl-maidens', true); echo $row_7_bowl_maidens_2;?></td>
							<td><?php $row_7_bowl_runs_2 = get_post_meta($post->ID, '2-row-7-bowl-runs', true); echo $row_7_bowl_runs_2;?></td>
							<td><?php $row_7_bowl_wickets_2 = get_post_meta($post->ID, '2-row-7-bowl-wickets', true); echo $row_7_bowl_wickets_2;?></td>
							<td><?php $row_7_bowl_economy_1 = get_post_meta($post->ID, '2-row-7-bowl-economy', true); echo $row_7_bowl_economy_1;?></td>
						</tr>
                	</tbody>
                </table>
            </div>

			<div class="back-to-top">
		    	<a href="#" class="back-to-top"></a>
		    </div>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>