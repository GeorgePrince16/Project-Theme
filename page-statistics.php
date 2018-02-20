<style>
table {
color: #cc9600;
}
tr#batting-head {
  background: #001350;
}
tr td {
text-align: left;
padding: 0px 15px;
font-size: 15px;
}
table .batting-table tr:nth-child(even) {
    background-color: #fff;
}
table .batting-table tr:nth-child(odd) {
    background-color: #e6e6e6;
}
table .batting-table tr:hover {
    background-color: #001350;
}
table {
color: #cc9600;
}
tr#bowling-head {
  background: #001350;
}
tr td {
text-align: left;
padding: 0px 15px;
font-size: 15px;
}
table .bowling-table tr:nth-child(even) {
    background-color: #fff;
}
table .bowling-table tr:nth-child(odd) {
    background-color: #e6e6e6;
}
table .bowling-table tr:hover {
    background-color: #001350;
}
.statistics-buttons {
display:inline-block;
}
#batting-button {
margin-bottom: 5px;
}
</style>

<?php get_header(); ?>

  <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
              <h1 class="blog-post-title">
                  <?php the_title(); ?>       
              </h1>
            </div><!-- /.blog-post -->

          <div class="col-md-6">
            <button class="btn btn-default" id="batting-button">VIew the Batting Statistics</button>
          </div>
          <div class="col-md-6">
            <button class="btn btn-default" id="bowling-button">VIew the Bowling Statistics</button>
          </div>
          <br>
          <h2 style="float:left;" id="bowling-title">2017 Bowling Statistics</h2>
          <br>
          <h2 id="batting-title">2017 Batting Statistics</h2>
          <table class="batting">
            <tbody class="batting-table">
              <tr id="batting-head">
                <td>Name</td>
                <td>1st XI</td>
                <td>2nd XI</td>
                <td>3rd XI</td>
                <td>Total</td>
                <td>Innings</td>
                <td>N-O</td>
                <td>50s</td>
                <td>100s</td>
                <td>H-S</td>
                <td>Runs</td>
                <td>Avg</td>
              </tr>
              <tr>
                <td>T Khan</td>
                <td>22</td>
                <td></td>
                <td></td>
                <td>22</td>
                <td>20</td>
                <td>4</td>
                <td>7</td>
                <td></td>
                <td>84</td>
                <td>679</td>
                <td>42.44</td>
              </tr>
              <tr>
                <td>M English</td>
                <td>14</td>
                <td></td>
                <td></td>
                <td>14</td>
                <td>13</td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>102</td>
                <td>539</td>
                <td>44.92</td>
              </tr>
              <tr>
                <td>C Burns</td>
                <td>16</td>
                <td></td>
                <td></td>
                <td>16</td>
                <td>15</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>66</td>
                <td>359</td>
                <td>23.93</td>
              </tr>
              <tr>
                <td>K McPeak</td>
                <td>6</td>
                <td>6</td>
                <td>4</td>
                <td>16</td>
                <td>15</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>79</td>
                <td>289</td>
                <td>19.27</td>
              </tr>
              <tr>
                <td>N McCollum</td>
                <td>18</td>
                <td></td>
                <td></td>
                <td>18</td>
                <td>17</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>34</td>
                <td>247</td>
                <td>15.44</td>
              </tr>
              <tr>
                <td>W Simpson</td>
                <td>3</td>
                <td>6</td>
                <td>7</td>
                <td>16</td>
                <td>11</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>63</td>
                <td>232</td>
                <td>21.09</td>
              </tr>
              <tr>
                <td>A Nixon</td>
                <td>17</td>
                <td></td>
                <td></td>
                <td>17</td>
                <td>15</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>76*</td>
                <td>209</td>
                <td>14.93</td>
              </tr>
              <tr>
                <td>Z Kerr</td>
                <td>2</td>
                <td>7</td>
                <td>2</td>
                <td>11</td>
                <td>10</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>80</td>
                <td>202</td>
                <td>20.20</td>
              </tr>
              <tr>
                <td>I Fletcher</td>
                <td></td>
                <td>7</td>
                <td>13</td>
                <td>20</td>
                <td>17</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>29</td>
                <td>195</td>
                <td>15.00</td>
              </tr>
              <tr>
                <td>P English</td>
                <td>8</td>
                <td>2</td>
                <td></td>
                <td>10</td>
                <td>9</td>
                <td>2</td>
                <td>2</td>
                <td></td>
                <td>51*</td>
                <td>183</td>
                <td>26.14</td>
              </tr>
              <tr>
                <td>S Hamilton</td>
                <td></td>
                <td>4</td>
                <td>4</td>
                <td>8</td>
                <td>8</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>53</td>
                <td>159</td>
                <td>22.71</td>
              </tr>
              <tr>
                <td>P Houstoun</td>
                <td></td>
                <td>7</td>
                <td>5</td>
                <td>12</td>
                <td>11</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>52</td>
                <td>155</td>
                <td>14.09</td>
              </tr>
              <tr>
                <td>E Fraser</td>
                <td>11</td>
                <td>1</td>
                <td></td>
                <td>12</td>
                <td>11</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>46</td>
                <td>152</td>
                <td>15.20</td>
              </tr>
              <tr>
                <td>C Houstoun</td>
                <td>4</td>
                <td>6</td>
                <td></td>
                <td>10</td>
                <td>9</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>43*</td>
                <td>138</td>
                <td>19.71</td>
              </tr>
              <tr>
                <td>I Chapman</td>
                <td></td>
                <td>3</td>
                <td>7</td>
                <td>10</td>
                <td>9</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>63</td>
                <td>136</td>
                <td>17.00</td>
              </tr>
              <tr>
                <td>R McLarnon</td>
                <td>19</td>
                <td></td>
                <td></td>
                <td>19</td>
                <td>10</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>31</td>
                <td>116</td>
                <td>19.33</td>
              </tr>
              <tr>
                <td>C Yeates</td>
                <td></td>
                <td>6</td>
                <td></td>
                <td>6</td>
                <td>6</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>55</td>
                <td>115</td>
                <td>23.00</td>
              </tr>
              <tr>
                <td>A McCusker</td>
                <td>13</td>
                <td>1</td>
                <td></td>
                <td>14</td>
                <td>12</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td>38*</td>
                <td>107</td>
                <td>11.89</td>
              </tr>
              <tr>
                <td>P McMillan</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>75*</td>
                <td>94</td>
                <td>94.00</td>
              </tr>
              <tr>
                <td>J Patterson</td>
                <td>13</td>
                <td>1</td>
                <td></td>
                <td>14</td>
                <td>11</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>24</td>
                <td>94</td>
                <td>13.43</td>
              </tr>
              <tr>
                <td>B Escott</td>
                <td></td>
                <td>1</td>
                <td>11</td>
                <td>12</td>
                <td>12</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>19</td>
                <td>92</td>
                <td>8.36</td>
              </tr>
              <tr>
                <td>D Young</td>
                <td></td>
                <td>6</td>
                <td>3</td>
                <td>9</td>
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td>49</td>
                <td>91</td>
                <td>13.00</td>
              </tr>
              <tr>
                <td>K King</td>
                <td>1</td>
                <td>4</td>
                <td>2</td>
                <td>7</td>
                <td>7</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>19*</td>
                <td>85</td>
                <td>17.00</td>
              </tr>
              <tr>
                <td>N Bates</td>
                <td></td>
                <td>2</td>
                <td>7</td>
                <td>9</td>
                <td>7</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>25</td>
                <td>82</td>
                <td>13.67</td>
              </tr>
              <tr>
                <td>T Onyekwelu</td>
                <td>7</td>
                <td>2</td>
                <td>1</td>
                <td>10</td>
                <td>6</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>31*</td>
                <td>80</td>
                <td>20.00</td>
              </tr>
              <tr>
                <td>M Quinn</td>
                <td></td>
                <td>8</td>
                <td>4</td>
                <td>12</td>
                <td>9</td>
                <td></td>
                <td></td>
                <td></td>
                <td>23</td>
                <td>78</td>
                <td>8.67</td>
              </tr>
              <tr>
                <td>G Prince</td>
                <td>18</td>
                <td>4</td>
                <td></td>
                <td>22</td>
                <td>15</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>31</td>
                <td>76</td>
                <td>5.85</td>
              </tr>
              <tr>
                <td>A Cox</td>
                <td></td>
                <td></td>
                <td>11</td>
                <td>11</td>
                <td>9</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>13</td>
                <td>68</td>
                <td>8.50</td>
              </tr>
              <tr>
                <td>R Garrett</td>
                <td>7</td>
                <td>8</td>
                <td></td>
                <td>15</td>
                <td>11</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>23</td>
                <td>67</td>
                <td>7.44</td>
              </tr>
              <tr>
                <td>P McIlwaine</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>60*</td>
                <td>60</td>
                <td>NA</td>
              </tr>
              <tr>
                <td>J McKenzie</td>
                <td></td>
                <td></td>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td>27</td>
                <td>52</td>
                <td>17.33</td>
              </tr>
              <tr>
                <td>A Hare</td>
                <td></td>
                <td></td>
                <td>10</td>
                <td>10</td>
                <td>8</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td>22*</td>
                <td>52</td>
                <td>10.40</td>
              </tr>
              <tr>
                <td>T Boyd</td>
                <td>4</td>
                <td>3</td>
                <td></td>
                <td>7</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td>37</td>
                <td>49</td>
                <td>9.80</td>
              </tr>
              <tr>
                <td>C Cox</td>
                <td>1</td>
                <td>8</td>
                <td>9</td>
                <td>18</td>
                <td>12</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td>12*</td>
                <td>47</td>
                <td>6.71</td>
              </tr>
              <tr>
                <td>J Griffin</td>
                <td>9</td>
                <td>3</td>
                <td>1</td>
                <td>13</td>
                <td>10</td>
                <td></td>
                <td></td>
                <td></td>
                <td>22</td>
                <td>43</td>
                <td>4.30</td>
              </tr>
              <tr>
                <td>J Parker</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>4</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td>39</td>
                <td>40</td>
                <td>10.00</td>
              </tr>
              <tr>
                <td>C Pyper</td>
                <td></td>
                <td>3</td>
                <td>10</td>
                <td>13</td>
                <td>8</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>13*</td>
                <td>37</td>
                <td>6.17</td>
              </tr>
              <tr>
                <td>T Speers</td>
                <td>1</td>
                <td>9</td>
                <td></td>
                <td>10</td>
                <td>6</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>14</td>
                <td>35</td>
                <td>17.50</td>
              </tr>
              <tr>
                <td>R Millar</td>
                <td></td>
                <td>2</td>
                <td>7</td>
                <td>9</td>
                <td>7</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>10*</td>
                <td>25</td>
                <td>4.17</td>
              </tr>
              <tr>
                <td>J Lowry</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td>13</td>
                <td>22</td>
                <td>11.00</td>
              </tr>
              <tr>
                <td>M Nixon</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td>15</td>
                <td>20</td>
                <td>10.00</td>
              </tr>
              <tr>
                <td>R Chambers</td>
                <td>6</td>
                <td>6</td>
                <td>1</td>
                <td>13</td>
                <td>5</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>7</td>
                <td>18</td>
                <td>4.50</td>
              </tr>
              <tr>
                <td>M Grossett</td>
                <td>6</td>
                <td></td>
                <td></td>
                <td>6</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td>7</td>
                <td>12</td>
                <td>3.00</td>
              </tr>
              <tr>
                <td>A White</td>
                <td></td>
                <td>1</td>
                <td>3</td>
                <td>4</td>
                <td>4</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>9*</td>
                <td>11</td>
                <td>3.67</td>
              </tr>
              <tr>
                <td>M Kwelu</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>2</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>10</td>
                <td>10</td>
                <td>10.00</td>
              </tr>
              <tr>
                <td>P Boyd</td>
                <td></td>
                <td>2</td>
                <td>3</td>
                <td>5</td>
                <td>4</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>9</td>
                <td>3.00</td>
              </tr>
              <tr>
                <td>A Williamson</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>8</td>
                <td>8</td>
                <td>8.00</td>
              </tr>
              <tr>
                <td>P McKenzie</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td>3</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td>6</td>
                <td>8</td>
                <td>2.67</td>
              </tr>
              <tr>
                <td>O Aicken</td>
                <td></td>
                <td>4</td>
                <td>9</td>
                <td>13</td>
                <td>9</td>
                <td>4</td>
                <td></td>
                <td></td>
                <td>4</td>
                <td>8</td>
                <td>1.60</td>
              </tr>
              <tr>
                <td>M Rooschuz</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>5</td>
                <td>5.00</td>
              </tr>
              <tr>
                <td>A Bell</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td>3</td>
                <td>4</td>
                <td>2.00</td>
              </tr>
              <tr>
                <td>J Stewart</td>
                <td></td>
                <td>5</td>
                <td></td>
                <td>5</td>
                <td>2</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>3*</td>
                <td>3</td>
                <td>3.00</td>
              </tr>
              <tr>
                <td>A Pyper</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td>2.00</td>
              </tr>
              <tr>
                <td>C Escott</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>2</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>2</td>
                <td>2</td>
                <td>2.00</td>
              </tr>
              <tr>
                <td>M Pitts</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1.00</td>
              </tr>
              <tr>
                <td>R Murphy</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>4</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>1*</td>
                <td>1</td>
                <td>0.33</td>
              </tr>
              <tr>
                <td>C Boal</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>0.00</td>
              </tr>
              <tr>
                <td>D Jamieson</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>0.00</td>
              </tr>
              <tr>
                <td>J McKeown</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>0.00</td>
              </tr>
              <tr>
                <td>M Hatch</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>0.00</td>
              </tr>
              <tr>
                <td>M Bell</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA</td>
              </tr>
              <tr>
                <td>R Miller</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>NA</td>
              </tr>
            </tbody>
          </table>
          <table class="bowling">
            <tbody class="bowling-table">
              <tr id="bowling-head">
                <td>Name</td>
                <td>1st XI</td>
                <td>2nd XI</td>
                <td>3rd XI</td>
                <td>Total</td>
                <td>Overs</td>
                <td>Mdns</td>
                <td>Wkts</td>
                <td>Runs</td>
                <td>B/B</td>
                <td>Eco</td>
                <td>S-R</td>
                <td>Avg</td>
              </tr>
              <tr>
                <td>G Prince</td>
                <td>18</td>
                <td>4</td>
                <td></td>
                <td>22</td>
                <td>116.4</td>
                <td>8</td>
                <td>34</td>
                <td>578</td>
                <td>5/22</td>
                <td>4.95</td>
                <td>20.59</td>
                <td>17</td>
              </tr>
              <tr>
                <td>A Nixon</td>
                <td>17</td>
                <td></td>
                <td></td>
                <td>17</td>
                <td>100.2</td>
                <td>13</td>
                <td>33</td>
                <td>460</td>
                <td>6/19</td>
                <td>4.58</td>
                <td>18.24</td>
                <td>13.94</td>
              </tr>
              <tr>
                <td>T Khan</td>
                <td>22</td>
                <td></td>
                <td></td>
                <td>22</td>
                <td>156</td>
                <td>18</td>
                <td>25</td>
                <td>497</td>
                <td>3/9</td>
                <td>3.19</td>
                <td>37.44</td>
                <td>19.88</td>
              </tr>
              <tr>
                <td>M Grossett</td>
                <td>6</td>
                <td></td>
                <td></td>
                <td>6</td>
                <td>40.1</td>
                <td>3</td>
                <td>15</td>
                <td>158</td>
                <td>4/6</td>
                <td>3.93</td>
                <td>16.07</td>
                <td>10.53</td>
              </tr>
              <tr>
                <td>C Cox</td>
                <td>1</td>
                <td>8</td>
                <td>9</td>
                <td>18</td>
                <td>91</td>
                <td>9</td>
                <td>15</td>
                <td>418</td>
                <td>4-24</td>
                <td>4.59</td>
                <td>36.4</td>
                <td>27.87</td>
              </tr>
              <tr>
                <td>T Speers</td>
                <td>1</td>
                <td>9</td>
                <td></td>
                <td>10</td>
                <td>56</td>
                <td>1</td>
                <td>14</td>
                <td>235</td>
                <td>3/16</td>
                <td>4.2</td>
                <td>24</td>
                <td>16.79</td>
              </tr>
              <tr>
                <td>C Burns</td>
                <td>16</td>
                <td></td>
                <td></td>
                <td>16</td>
                <td>52</td>
                <td>3</td>
                <td>14</td>
                <td>352</td>
                <td>4/36</td>
                <td>6.77</td>
                <td>22.29</td>
                <td>25.14</td>
              </tr>
              <tr>
                <td>K McPeak</td>
                <td>6</td>
                <td>6</td>
                <td>4</td>
                <td>16</td>
                <td>33</td>
                <td>1</td>
                <td>13</td>
                <td>169</td>
                <td>4/29</td>
                <td>5.12</td>
                <td>15.23</td>
                <td>13</td>
              </tr>
              <tr>
                <td>W Simpson</td>
                <td>3</td>
                <td>6</td>
                <td>7</td>
                <td>16</td>
                <td>59</td>
                <td>4</td>
                <td>13</td>
                <td>305</td>
                <td>3/28</td>
                <td>5.17</td>
                <td>27.23</td>
                <td>23.46</td>
              </tr>
              <tr>
                <td>R Garrett</td>
                <td>7</td>
                <td>8</td>
                <td></td>
                <td>15</td>
                <td>75.1</td>
                <td>2</td>
                <td>12</td>
                <td>433</td>
                <td>3/17</td>
                <td>5.76</td>
                <td>37.58</td>
                <td>36.08</td>
              </tr>
              <tr>
                <td>B Escott</td>
                <td></td>
                <td>1</td>
                <td>11</td>
                <td>12</td>
                <td>50</td>
                <td>2</td>
                <td>11</td>
                <td>256</td>
                <td>2/5</td>
                <td>5.12</td>
                <td>27.27</td>
                <td>23.27</td>
              </tr>
              <tr>
                <td>C Pyper</td>
                <td></td>
                <td>3</td>
                <td>10</td>
                <td>13</td>
                <td>54.5</td>
                <td>3</td>
                <td>10</td>
                <td>249</td>
                <td>4/15</td>
                <td>4.54</td>
                <td>32.9</td>
                <td>24.9</td>
              </tr>
              <tr>
                <td>J Patterson</td>
                <td>13</td>
                <td>1</td>
                <td></td>
                <td>14</td>
                <td>63.5</td>
                <td>2</td>
                <td>10</td>
                <td>317</td>
                <td>4/16</td>
                <td>4.97</td>
                <td>38.3</td>
                <td>31.7</td>
              </tr>
              <tr>
                <td>P English</td>
                <td>8</td>
                <td>2</td>
                <td></td>
                <td>10</td>
                <td>42.2</td>
                <td>3</td>
                <td>9</td>
                <td>271</td>
                <td>3/39</td>
                <td>6.4</td>
                <td>28.22</td>
                <td>30.11</td>
              </tr>
              <tr>
                <td>O Aicken</td>
                <td></td>
                <td>4</td>
                <td>9</td>
                <td>13</td>
                <td>48.1</td>
                <td>2</td>
                <td>9</td>
                <td>312</td>
                <td>3/11</td>
                <td>6.48</td>
                <td>32.11</td>
                <td>34.67</td>
              </tr>
              <tr>
                <td>A Hare</td>
                <td></td>
                <td></td>
                <td>10</td>
                <td>10</td>
                <td>37.3</td>
                <td>2</td>
                <td>8</td>
                <td>174</td>
                <td>3/22</td>
                <td>4.64</td>
                <td>28.13</td>
                <td>21.75</td>
              </tr>
              <tr>
                <td>J Stewart</td>
                <td></td>
                <td>5</td>
                <td></td>
                <td>5</td>
                <td>31</td>
                <td>6</td>
                <td>7</td>
                <td>102</td>
                <td>3/16</td>
                <td>3.29</td>
                <td>26.57</td>
                <td>14.57</td>
              </tr>
              <tr>
                <td>N Bates</td>
                <td></td>
                <td>2</td>
                <td>7</td>
                <td>9</td>
                <td>30.5</td>
                <td></td>
                <td>7</td>
                <td>151</td>
                <td>3/27</td>
                <td>4.9</td>
                <td>26.43</td>
                <td>21.57</td>
              </tr>
              <tr>
                <td>R Chambers</td>
                <td>6</td>
                <td>6</td>
                <td>1</td>
                <td>13</td>
                <td>54.3</td>
                <td></td>
                <td>7</td>
                <td>333</td>
                <td>2/20</td>
                <td>6.11</td>
                <td>46.71</td>
                <td>47.57</td>
              </tr>
              <tr>
                <td>T Boyd</td>
                <td>4</td>
                <td>3</td>
                <td></td>
                <td>7</td>
                <td>19</td>
                <td></td>
                <td>6</td>
                <td>90</td>
                <td>2/13</td>
                <td>4.74</td>
                <td>19</td>
                <td>15</td>
              </tr>
              <tr>
                <td>P Boyd</td>
                <td></td>
                <td>2</td>
                <td>3</td>
                <td>5</td>
                <td>18</td>
                <td></td>
                <td>6</td>
                <td>101</td>
                <td>2/26</td>
                <td>5.61</td>
                <td>18</td>
                <td>16.83</td>
              </tr>
              <tr>
                <td>N McCollum</td>
                <td>18</td>
                <td></td>
                <td></td>
                <td>18</td>
                <td>36.2</td>
                <td></td>
                <td>6</td>
                <td>215</td>
                <td>4/20</td>
                <td>5.92</td>
                <td>36.33</td>
                <td>35.83</td>
              </tr>
              <tr>
                <td>P McIlwaine</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>7</td>
                <td></td>
                <td>4</td>
                <td>17</td>
                <td>2/3</td>
                <td>2.43</td>
                <td>10.5</td>
                <td>4.25</td>
              </tr>
              <tr>
                <td>A White</td>
                <td></td>
                <td>1</td>
                <td>3</td>
                <td>4</td>
                <td>8</td>
                <td></td>
                <td>4</td>
                <td>42</td>
                <td>2/29</td>
                <td>5.25</td>
                <td>12</td>
                <td>10.5</td>
              </tr>
              <tr>
                <td>T Onyekwelu</td>
                <td>7</td>
                <td>2</td>
                <td>1</td>
                <td>10</td>
                <td>21.5</td>
                <td>1</td>
                <td>4</td>
                <td>95</td>
                <td>1/13</td>
                <td>4.35</td>
                <td>32.75</td>
                <td>23.75</td>
              </tr>
              <tr>
                <td>A Bell</td>
                <td></td>
                <td>2</td>
                <td></td>
                <td>2</td>
                <td>7</td>
                <td></td>
                <td>3</td>
                <td>38</td>
                <td>3/38</td>
                <td>5.43</td>
                <td>14</td>
                <td>12.67</td>
              </tr>
              <tr>
                <td>I Chapman</td>
                <td></td>
                <td>3</td>
                <td>7</td>
                <td>10</td>
                <td>20</td>
                <td>1</td>
                <td>3</td>
                <td>80</td>
                <td>1/6</td>
                <td>4</td>
                <td>40</td>
                <td>26.67</td>
              </tr>
              <tr>
                <td>C Yeates</td>
                <td></td>
                <td>6</td>
                <td></td>
                <td>6</td>
                <td>16</td>
                <td>1</td>
                <td>3</td>
                <td>94</td>
                <td>2/17</td>
                <td>5.88</td>
                <td>32</td>
                <td>31.33</td>
              </tr>
              <tr>
                <td>M Pitts</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>4</td>
                <td></td>
                <td>2</td>
                <td>12</td>
                <td>2/12</td>
                <td>3</td>
                <td>12</td>
                <td>6</td>
              </tr>
              <tr>
                <td>J McKeown</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>10</td>
                <td>2</td>
                <td>2</td>
                <td>30</td>
                <td>2/30</td>
                <td>3</td>
                <td>30</td>
                <td>15</td>
              </tr>
              <tr>
                <td>P McKenzie</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td>3</td>
                <td>30</td>
                <td></td>
                <td>2</td>
                <td>148</td>
                <td>1/47</td>
                <td>4.93</td>
                <td>90</td>
                <td>74</td>
              </tr>
              <tr>
                <td>C Boal</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td>4</td>
                <td>1/4</td>
                <td>4</td>
                <td>6</td>
                <td>4</td>
              </tr>
              <tr>
                <td>M Rooschuz</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>6</td>
                <td></td>
                <td>1</td>
                <td>22</td>
                <td>1/22</td>
                <td>3.67</td>
                <td>36</td>
                <td>22</td>
              </tr>
              <tr>
                <td>R Miller</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>10</td>
                <td></td>
                <td>1</td>
                <td>25</td>
                <td>1/25</td>
                <td>2.5</td>
                <td>60</td>
                <td>25</td>
              </tr>
              <tr>
                <td>C Escott</td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
                <td>6</td>
                <td></td>
                <td>1</td>
                <td>37</td>
                <td>1/37</td>
                <td>6.17</td>
                <td>36</td>
                <td>37</td>
              </tr>
              <tr>
                <td>J Griffin</td>
                <td>9</td>
                <td>3</td>
                <td>1</td>
                <td>13</td>
                <td>5</td>
                <td></td>
                <td>1</td>
                <td>39</td>
                <td>1/39</td>
                <td>7.8</td>
                <td>30</td>
                <td>39</td>
              </tr>
              <tr>
                <td>R Murphy</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td>5</td>
                <td>26</td>
                <td>2</td>
                <td>1</td>
                <td>170</td>
                <td>1/22</td>
                <td>6.54</td>
                <td>156</td>
                <td>170</td>
              </tr>
              <tr>
                <td>E Fraser</td>
                <td>11</td>
                <td>1</td>
                <td></td>
                <td>12</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td>7</td>
                <td>0-7</td>
                <td>7</td>
                <td>NA</td>
                <td>NA</td>
              </tr>
              <tr>
                <td>D Young</td>
                <td></td>
                <td>6</td>
                <td>3</td>
                <td>9</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td>29</td>
                <td>0-7</td>
                <td>9.67</td>
                <td>NA</td>
                <td>NA</td>
              </tr>
              <tr>
                <td>C Houstoun</td>
                <td>4</td>
                <td>6</td>
                <td></td>
                <td>10</td>
                <td>1.2</td>
                <td></td>
                <td></td>
                <td>19</td>
                <td>0-19</td>
                <td>14.25</td>
                <td>NA</td>
                <td>NA</td>
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