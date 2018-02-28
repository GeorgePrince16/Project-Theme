<?php get_header(); ?>

    <div class="container">
      <div class="row">
          <div class="col-sm-8 blog-main">
              <div class="blog-post">
                  <h1 class="blog-post-title">
                      <?php the_title(); ?>       
                  </h1>
              </div><!-- /.blog-post -->

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nunc quam, dictum sit amet ornare quis, elementum et odio. Praesent faucibus tellus sit amet tincidunt lacinia.</p>

              <p>The First Team Fixtures for the upcoming 2018 Junior 2 season have been announced, check them out down below!</p>

              <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">League Fixtures</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <table class="fixtures" style="width: 100%; color: #cc9600;">
                          <tbody class="fixtures-body">
                            <tr id="fixtures-head" style="background: #001350;">
                              <td>Opposition</td>
                              <td>Date</td>
                            </tr>
                            <tr>
                              <td>Donaghcloney Mill (a)</td>
                              <td>21st April</td>
                            </tr>
                            <tr>
                              <td>Woodvale (h)</td>
                              <td>28th April</td>
                            </tr>
                            <tr>
                              <td>Derriaghy (h)</td>
                              <td>5th May</td>
                            </tr>
                            <tr>
                              <td>Laurelvale (h)</td>
                              <td>2nd June</td>
                            </tr>
                            <tr>
                              <td>Downpatrick (a)</td>
                              <td>9th June</td>
                            </tr>
                            <tr>
                              <td>Cregagh (h)</td>
                              <td>16th June</td>
                            </tr>
                            <tr>
                              <td>Holywood (a)</td>
                              <td>23rd June</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Challenge Cup</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <table class="fixtures" style="width: 100%; color: #cc9600;">
                          <tbody class="fixtures-body">
                            <tr id="fixtures-head" style="background: #001350;">
                            <td>Opposition</td>
                            <td>Date</td>
                            </tr>
                            <tr>
                              <td>Quarter-Final: Donaghcloney Mill (a)</td>
                              <td>21st April</td>
                            </tr>
                            <tr>
                              <td>Semi Final</td>
                              <td>28th April</td>
                            </tr>
                            <tr>
                              <td>Final</td>
                              <td>5th May</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">T20 Cup</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <table class="fixtures" style="width: 100%; color: #cc9600;">
                          <tbody class="fixtures-body">
                            <tr id="fixtures-head" style="background: #001350;">
                            <td>Opposition</td>
                            <td>Date</td>
                            </tr>
                             <tr>
                              <td>First round: Donaghcloney Mill (a)</td>
                              <td>21st April</td>
                            </tr>
                            <tr>
                              <td>Quarter-Final: Donaghcloney Mill (a)</td>
                              <td>21st April</td>
                            </tr>
                            <tr>
                              <td>Semi Final</td>
                              <td>28th April</td>
                            </tr>
                            <tr>
                              <td>Final</td>
                              <td>5th May</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              <!-- Ouputting value referenced from https://stackoverflow.com/questions/45734613/how-to-display-custom-meta-box-value-in-single-post-in-wordpress -->
              <h2>League Table</h2>
              <table class="league-table" style="width: 100%; color: #cc9600;">
                <tbody class="league-table-body">
                  <tr id="league-table-head" style="background: #001350;">
                    <td>Team</td>
                    <td>Played</td>
                    <td>Won</td>
                    <td>Lost</td>
                    <td>Tie</td>
                    <td>Void</td>
                    <td>Points</td>
                    <td>NRR</td>
                  </tr>
                  <!-- Row 1 Output -->
                  <tr>
                    <td><?php $row_1_team = get_post_meta($post->ID, 'row-1-team', true); echo $row_1_team;?></td>
                    <td><?php $row_1_played = get_post_meta($post->ID, 'row-1-played', true); echo $row_1_played;?></td>
                    <td><?php $row_1_won = get_post_meta($post->ID, 'row-1-won', true); echo $row_1_won;?></td>
                    <td><?php $row_1_lost = get_post_meta($post->ID, 'row-1-lost', true); echo $row_1_lost;?></td>
                    <td><?php $row_1_tie = get_post_meta($post->ID, 'row-1-tie', true); echo $row_1_tie;?></td>
                    <td><?php $row_1_nr = get_post_meta($post->ID, 'row-1-nr', true); echo $row_1_nr;?></td>
                    <td><?php $row_1_points = get_post_meta($post->ID, 'row-1-points', true); echo $row_1_points;?></td>
                    <td><?php $row_1_run_rate = get_post_meta($post->ID, 'row-1-run-rate', true); echo $row_1_run_rate;?></td>
                  </tr>

                  <!-- Row 2 Output -->
                  <tr>
                    <td><?php $row_2_team = get_post_meta($post->ID, 'row-2-team', true); echo $row_2_team;?></td>
                    <td><?php $row_2_played = get_post_meta($post->ID, 'row-2-played', true); echo $row_2_played;?></td>
                    <td><?php $row_2_won = get_post_meta($post->ID, 'row-2-won', true); echo $row_2_won;?></td>
                    <td><?php $row_2_lost = get_post_meta($post->ID, 'row-2-lost', true); echo $row_2_lost;?></td>
                    <td><?php $row_2_tie = get_post_meta($post->ID, 'row-2-tie', true); echo $row_2_tie;?></td>
                    <td><?php $row_2_nr = get_post_meta($post->ID, 'row-2-nr', true); echo $row_2_nr;?></td>
                    <td><?php $row_2_points = get_post_meta($post->ID, 'row-2-points', true); echo $row_2_points;?></td>
                    <td><?php $row_2_run_rate = get_post_meta($post->ID, 'row-2-run-rate', true); echo $row_2_run_rate;?></td>
                  </tr>

                  <!-- Row 3 Output -->
                  <tr>
                    <td><?php $row_3_team = get_post_meta($post->ID, 'row-3-team', true); echo $row_3_team;?></td>
                    <td><?php $row_3_played = get_post_meta($post->ID, 'row-3-played', true); echo $row_3_played;?></td>
                    <td><?php $row_3_won = get_post_meta($post->ID, 'row-3-won', true); echo $row_3_won;?></td>
                    <td><?php $row_3_lost = get_post_meta($post->ID, 'row-3-lost', true); echo $row_3_lost;?></td>
                    <td><?php $row_3_tie = get_post_meta($post->ID, 'row-3-tie', true); echo $row_3_tie;?></td>
                    <td><?php $row_3_nr = get_post_meta($post->ID, 'row-3-nr', true); echo $row_3_nr;?></td>
                    <td><?php $row_3_points = get_post_meta($post->ID, 'row-3-points', true); echo $row_3_points;?></td>
                    <td><?php $row_3_run_rate = get_post_meta($post->ID, 'row-3-run-rate', true); echo $row_3_run_rate;?></td>
                  </tr>

                  <!-- Row 4 Output -->
                  <tr>
                    <td><?php $row_4_team = get_post_meta($post->ID, 'row-4-team', true); echo $row_4_team;?></td>
                    <td><?php $row_4_played = get_post_meta($post->ID, 'row-4-played', true); echo $row_4_played;?></td>
                    <td><?php $row_4_won = get_post_meta($post->ID, 'row-4-won', true); echo $row_4_won;?></td>
                    <td><?php $row_4_lost = get_post_meta($post->ID, 'row-4-lost', true); echo $row_4_lost;?></td>
                    <td><?php $row_4_tie = get_post_meta($post->ID, 'row-4-tie', true); echo $row_4_tie;?></td>
                    <td><?php $row_4_nr = get_post_meta($post->ID, 'row-4-nr', true); echo $row_4_nr;?></td>
                    <td><?php $row_4_points = get_post_meta($post->ID, 'row-4-points', true); echo $row_4_points;?></td>
                    <td><?php $row_4_run_rate = get_post_meta($post->ID, 'row-4-run-rate', true); echo $row_4_run_rate;?></td>
                  </tr>

                  <!-- Row 5 Output -->
                  <tr>
                    <td><?php $row_5_team = get_post_meta($post->ID, 'row-5-team', true); echo $row_5_team;?></td>
                    <td><?php $row_5_played = get_post_meta($post->ID, 'row-5-played', true); echo $row_5_played;?></td>
                    <td><?php $row_5_won = get_post_meta($post->ID, 'row-5-won', true); echo $row_5_won;?></td>
                    <td><?php $row_5_lost = get_post_meta($post->ID, 'row-5-lost', true); echo $row_5_lost;?></td>
                    <td><?php $row_5_tie = get_post_meta($post->ID, 'row-5-tie', true); echo $row_5_tie;?></td>
                    <td><?php $row_5_nr = get_post_meta($post->ID, 'row-5-nr', true); echo $row_5_nr;?></td>
                    <td><?php $row_5_points = get_post_meta($post->ID, 'row-5-points', true); echo $row_5_points;?></td>
                    <td><?php $row_5_run_rate = get_post_meta($post->ID, 'row-5-run-rate', true); echo $row_5_run_rate;?></td>
                  </tr>

                  <!-- Row 6 Output -->
                  <tr>
                    <td><?php $row_6_team = get_post_meta($post->ID, 'row-6-team', true); echo $row_6_team;?></td>
                    <td><?php $row_6_played = get_post_meta($post->ID, 'row-6-played', true); echo $row_6_played;?></td>
                    <td><?php $row_6_won = get_post_meta($post->ID, 'row-6-won', true); echo $row_6_won;?></td>
                    <td><?php $row_6_lost = get_post_meta($post->ID, 'row-6-lost', true); echo $row_6_lost;?></td>
                    <td><?php $row_6_tie = get_post_meta($post->ID, 'row-6-tie', true); echo $row_6_tie;?></td>
                    <td><?php $row_6_nr = get_post_meta($post->ID, 'row-6-nr', true); echo $row_6_nr;?></td>
                    <td><?php $row_6_points = get_post_meta($post->ID, 'row-6-points', true); echo $row_6_points;?></td>
                    <td><?php $row_6_run_rate = get_post_meta($post->ID, 'row-6-run-rate', true); echo $row_6_run_rate;?></td>
                  </tr>

                  <!-- Row 7 Output -->
                  <tr>
                    <td><?php $row_7_team = get_post_meta($post->ID, 'row-7-team', true); echo $row_7_team;?></td>
                    <td><?php $row_7_played = get_post_meta($post->ID, 'row-7-played', true); echo $row_7_played;?></td>
                    <td><?php $row_7_won = get_post_meta($post->ID, 'row-7-won', true); echo $row_7_won;?></td>
                    <td><?php $row_7_lost = get_post_meta($post->ID, 'row-7-lost', true); echo $row_7_lost;?></td>
                    <td><?php $row_7_tie = get_post_meta($post->ID, 'row-7-tie', true); echo $row_7_tie;?></td>
                    <td><?php $row_7_nr = get_post_meta($post->ID, 'row-7-nr', true); echo $row_7_nr;?></td>
                    <td><?php $row_7_points = get_post_meta($post->ID, 'row-7-points', true); echo $row_7_points;?></td>
                    <td><?php $row_7_run_rate = get_post_meta($post->ID, 'row-7-run-rate', true); echo $row_7_run_rate;?></td>
                  </tr>

                  <!-- Row 8 Output -->
                  <tr>
                    <td><?php $row_8_team = get_post_meta($post->ID, 'row-8-team', true); echo $row_8_team;?></td>
                    <td><?php $row_8_played = get_post_meta($post->ID, 'row-8-played', true); echo $row_8_played;?></td>
                    <td><?php $row_8_won = get_post_meta($post->ID, 'row-8-won', true); echo $row_8_won;?></td>
                    <td><?php $row_8_lost = get_post_meta($post->ID, 'row-8-lost', true); echo $row_8_lost;?></td>
                    <td><?php $row_8_tie = get_post_meta($post->ID, 'row-8-tie', true); echo $row_8_tie;?></td>
                    <td><?php $row_8_nr = get_post_meta($post->ID, 'row-8-nr', true); echo $row_8_nr;?></td>
                    <td><?php $row_8_points = get_post_meta($post->ID, 'row-8-points', true); echo $row_8_points;?></td>
                    <td><?php $row_8_run_rate = get_post_meta($post->ID, 'row-8-run-rate', true); echo $row_8_run_rate;?></td>
                  </tr>

                  <!-- Row 9 Output -->
                  <tr>
                    <td><?php $row_9_team = get_post_meta($post->ID, 'row-9-team', true); echo $row_9_team;?></td>
                    <td><?php $row_9_played = get_post_meta($post->ID, 'row-9-played', true); echo $row_9_played;?></td>
                    <td><?php $row_9_won = get_post_meta($post->ID, 'row-9-won', true); echo $row_9_won;?></td>
                    <td><?php $row_9_lost = get_post_meta($post->ID, 'row-9-lost', true); echo $row_9_lost;?></td>
                    <td><?php $row_9_tie = get_post_meta($post->ID, 'row-9-tie', true); echo $row_9_tie;?></td>
                    <td><?php $row_9_nr = get_post_meta($post->ID, 'row-9-nr', true); echo $row_9_nr;?></td>
                    <td><?php $row_9_points = get_post_meta($post->ID, 'row-9-points', true); echo $row_9_points;?></td>
                    <td><?php $row_9_run_rate = get_post_meta($post->ID, 'row-9-run-rate', true); echo $row_9_run_rate;?></td>
                  </tr>

                  <!-- Row 10 Output -->
                  <tr>
                    <td><?php $row_10_team = get_post_meta($post->ID, 'row-10-team', true); echo $row_10_team;?></td>
                    <td><?php $row_10_played = get_post_meta($post->ID, 'row-10-played', true); echo $row_10_played;?></td>
                    <td><?php $row_10_won = get_post_meta($post->ID, 'row-10-won', true); echo $row_10_won;?></td>
                    <td><?php $row_10_lost = get_post_meta($post->ID, 'row-10-lost', true); echo $row_10_lost;?></td>
                    <td><?php $row_10_tie = get_post_meta($post->ID, 'row-10-tie', true); echo $row_10_tie;?></td>
                    <td><?php $row_10_nr = get_post_meta($post->ID, 'row-10-nr', true); echo $row_10_nr;?></td>
                    <td><?php $row_10_points = get_post_meta($post->ID, 'row-10-points', true); echo $row_10_points;?></td>
                    <td><?php $row_10_run_rate = get_post_meta($post->ID, 'row-10-run-rate', true); echo $row_10_run_rate;?></td>
                  </tr>
                </tbody>
            </table>

                <div class="back-to-top">
                  <a href="#" class="back-to-top"></a>
                </div>

              </div><!-- /.blog-main -->

            </div><!-- /.row -->

          </div><!-- /.container -->


<?php get_footer(); ?>