
@extends('layouts.myapp')
@section('css')
    
@endsection
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>Distance <span style="color:#518117;">M</span><span style="color:#067C67">a</span><span
            style="color: #0E538D;">t</span><span style="color: #4D4788;">r</span><span
            style="color:#874784 ;">i</span><span style="color: #D12150;">x</span></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="distance_matrix" style="overflow: scroll;">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                        <td class="new"><span class="style5 style6">ALIPUR</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">ASANSOL</span></td>
                        <td><span class="style5">234</span></td>
                        <td><span class="style5">0</span></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="new1" colspan="3"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="3"><span class="style5 style6">DISTANCES IN KILOMETRES</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <!--<td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>-->
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BAHARAMPUR</span></td>
                        <td><span class="style5">211</span></td>
                        <td><span class="style5">157</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BALURGHAT</span></td>
                        <td><span class="style5">445</span></td>
                        <td><span class="style5">342</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BANKURA</span></td>
                        <td><span class="style5">169</span></td>
                        <td><span class="style5">65</span></td>
                        <td><span class="style5">170</span></td>
                        <td><span class="style5">374</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BARASAT</span></td>
                        <td><span class="style5">382</span></td>
                        <td><span class="style5">36</span></td>
                        <td><span class="style5">173</span></td>
                        <td><span class="style5">407</span></td>
                        <td><span class="style5">199</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BARDDHAMAN</span></td>
                        <td><span class="style5">127</span></td>
                        <td><span class="style5">107</span></td>
                        <td><span class="style5">129</span></td>
                        <td><span class="style5">395</span></td>
                        <td><span class="style5">93</span></td>
                        <td><span class="style5">106</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">BOLPUR</span></td>
                        <td><span class="style5">217</span></td>
                        <td><span class="style5">99</span></td>
                        <td><span class="style5">90</span></td>
                        <td><span class="style5">305</span></td>
                        <td><span class="style5">98</span></td>
                        <td><span class="style5">196</span></td>
                        <td><span class="style5">90</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">KOLKATA</span></td>
                        <td><span class="style5">6</span></td>
                        <td><span class="style5">228</span></td>
                        <td><span class="style5">205</span></td>
                        <td><span class="style5">439</span></td>
                        <td><span class="style5">163</span></td>
                        <td><span class="style5">32</span></td>
                        <td><span class="style5">121</span></td>
                        <td><span class="style5">211</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">CHITTARANJAN</span></td>
                        <td><span class="style5">263</span></td>
                        <td><span class="style5">29</span></td>
                        <td><span class="style5">186</span></td>
                        <td><span class="style5">371</span></td>
                        <td><span class="style5">94</span></td>
                        <td><span class="style5">265</span></td>
                        <td><span class="style5">136</span></td>
                        <td><span class="style5">128</span></td>
                        <td><span class="style5">257</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">DARJILING</span></td>
                        <td><span class="style5">662</span></td>
                        <td><span class="style5">559</span></td>
                        <td><span class="style5">451</span></td>
                        <td><span class="style5">351</span></td>
                        <td><span class="style5">591</span></td>
                        <td><span class="style5">624</span></td>
                        <td><span class="style5">612</span></td>
                        <td><span class="style5">522</span></td>
                        <td><span class="style5">656</span></td>
                        <td><span class="style5">588</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">DURGAPUR</span></td>
                        <td><span class="style5">192</span></td>
                        <td><span class="style5">42</span></td>
                        <td><span class="style5">147</span></td>
                        <td><span class="style5">333</span></td>
                        <td><span class="style5">41</span></td>
                        <td><span class="style5">171</span></td>
                        <td><span class="style5">65</span></td>
                        <td><span class="style5">57</span></td>
                        <td><span class="style5">186</span></td>
                        <td><span class="style5">71</span></td>
                        <td><span class="style5">550</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">HAORA</span></td>
                        <td><span class="style5">112</span></td>
                        <td><span class="style5">23</span></td>
                        <td><span class="style5">200</span></td>
                        <td><span class="style5">434</span></td>
                        <td><span class="style5">209</span></td>
                        <td><span class="style5">27</span></td>
                        <td><span class="style5">116</span></td>
                        <td><span class="style5">206</span></td>
                        <td><span class="style5">5</span></td>
                        <td><span class="style5">252</span></td>
                        <td><span class="style5">651</span></td>
                        <td><span class="style5">181</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">INGRAZ BAZAR</span></td>
                        <td><span class="style5">354</span></td>
                        <td><span class="style5">251</span></td>
                        <td><span class="style5">143</span></td>
                        <td><span class="style5">91</span></td>
                        <td><span class="style5">283</span></td>
                        <td><span class="style5">316</span></td>
                        <td><span class="style5">304</span></td>
                        <td><span class="style5">214</span></td>
                        <td><span class="style5">348</span></td>
                        <td><span class="style5">280</span></td>
                        <td><span class="style5">308</span></td>
                        <td><span class="style5">242</span></td>
                        <td><span class="style5">343</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">JALPAIGURI</span></td>
                        <td><span class="style5">650</span></td>
                        <td><span class="style5">547</span></td>
                        <td><span class="style5">439</span></td>
                        <td><span class="style5">339</span></td>
                        <td><span class="style5">579</span></td>
                        <td><span class="style5">612</span></td>
                        <td><span class="style5">600</span></td>
                        <td><span class="style5">510</span></td>
                        <td><span class="style5">644</span></td>
                        <td><span class="style5">576</span></td>
                        <td><span class="style5">98</span></td>
                        <td><span class="style5">538</span></td>
                        <td><span class="style5">592</span></td>
                        <td><span class="style5">296</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">KALIMPONG</span></td>
                        <td><span class="style5">662</span></td>
                        <td><span class="style5">559</span></td>
                        <td><span class="style5">451</span></td>
                        <td><span class="style5">351</span></td>
                        <td><span class="style5">591</span></td>
                        <td><span class="style5">624</span></td>
                        <td><span class="style5">612</span></td>
                        <td><span class="style5">522</span></td>
                        <td><span class="style5">656</span></td>
                        <td><span class="style5">588</span></td>
                        <td><span class="style5">33</span></td>
                        <td><span class="style5">550</span></td>
                        <td><span class="style5">651</span></td>
                        <td><span class="style5">308</span></td>
                        <td><span class="style5">98</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">KARSIYANG</span></td>
                        <td><span class="style5">638</span></td>
                        <td><span class="style5">535</span></td>
                        <td><span class="style5">432</span></td>
                        <td><span class="style5">327</span></td>
                        <td><span class="style5">567</span></td>
                        <td><span class="style5">600</span></td>
                        <td><span class="style5">588</span></td>
                        <td><span class="style5">498</span></td>
                        <td><span class="style5">632</span></td>
                        <td><span class="style5">564</span></td>
                        <td><span class="style5">24</span></td>
                        <td><span class="style5">526</span></td>
                        <td><span class="style5">580</span></td>
                        <td><span class="style5">284</span></td>
                        <td><span class="style5">74</span></td>
                        <td><span class="style5">43</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">KOCH BIHAR</span></td>
                        <td><span class="style5">752</span></td>
                        <td><span class="style5">649</span></td>
                        <td><span class="style5">541</span></td>
                        <td><span class="style5">441</span></td>
                        <td><span class="style5">681</span></td>
                        <td><span class="style5">714</span></td>
                        <td><span class="style5">702</span></td>
                        <td><span class="style5">612</span></td>
                        <td><span class="style5">746</span></td>
                        <td><span class="style5">678</span></td>
                        <td><span class="style5">200</span></td>
                        <td><span class="style5">640</span></td>
                        <td><span class="style5">694</span></td>
                        <td><span class="style5">398</span></td>
                        <td><span class="style5">102</span></td>
                        <td><span class="style5">200</span></td>
                        <td><span class="style5">176</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">KRISHNANAGAR</span></td>
                        <td><span class="style5">121</span></td>
                        <td><span class="style5">193</span></td>
                        <td><span class="style5">90</span></td>
                        <td><span class="style5">324</span></td>
                        <td><span class="style5">179</span></td>
                        <td><span class="style5">83</span></td>
                        <td><span class="style5">86</span></td>
                        <td><span class="style5">176</span></td>
                        <td><span class="style5">115</span></td>
                        <td><span class="style5">222</span></td>
                        <td><span class="style5">541</span></td>
                        <td><span class="style5">151</span></td>
                        <td><span class="style5">110</span></td>
                        <td><span class="style5">233</span></td>
                        <td><span class="style5">529</span></td>
                        <td><span class="style5">541</span></td>
                        <td><span class="style5">517</span></td>
                        <td><span class="style5">631</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">MEDINIPUR</span></td>
                        <td><span class="style5">134</span></td>
                        <td><span class="style5">173</span></td>
                        <td><span class="style5">259</span></td>
                        <td><span class="style5">525</span></td>
                        <td><span class="style5">108</span></td>
                        <td><span class="style5">160</span></td>
                        <td><span class="style5">130</span></td>
                        <td><span class="style5">210</span></td>
                        <td><span class="style5">128</span></td>
                        <td><span class="style5">202</span></td>
                        <td><span class="style5">742</span></td>
                        <td><span class="style5">143</span></td>
                        <td><span class="style5">123</span></td>
                        <td><span class="style5">434</span></td>
                        <td><span class="style5">730</span></td>
                        <td><span class="style5">742</span></td>
                        <td><span class="style5">718</span></td>
                        <td><span class="style5">832</span></td>
                        <td><span class="style5">216</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">PURULIYA</span></td>
                        <td><span class="style5">134</span></td>
                        <td><span class="style5">85</span></td>
                        <td><span class="style5">269</span></td>
                        <td><span class="style5">427</span></td>
                        <td><span class="style5">81</span></td>
                        <td><span class="style5">280</span></td>
                        <td><span class="style5">174</span></td>
                        <td><span class="style5">179</span></td>
                        <td><span class="style5">295</span></td>
                        <td><span class="style5">94</span></td>
                        <td><span class="style5">644</span></td>
                        <td><span class="style5">122</span></td>
                        <td><span class="style5">290</span></td>
                        <td><span class="style5">336</span></td>
                        <td><span class="style5">632</span></td>
                        <td><span class="style5">644</span></td>
                        <td><span class="style5">620</span></td>
                        <td><span class="style5">734</span></td>
                        <td><span class="style5">260</span></td>
                        <td><span class="style5">170</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">SHILIGURI</span></td>
                        <td><span class="style5">607</span></td>
                        <td><span class="style5">504</span></td>
                        <td><span class="style5">396</span></td>
                        <td><span class="style5">296</span></td>
                        <td><span class="style5">536</span></td>
                        <td><span class="style5">569</span></td>
                        <td><span class="style5">557</span></td>
                        <td><span class="style5">467</span></td>
                        <td><span class="style5">601</span></td>
                        <td><span class="style5">533</span></td>
                        <td><span class="style5">55</span></td>
                        <td><span class="style5">495</span></td>
                        <td><span class="style5">549</span></td>
                        <td><span class="style5">253</span></td>
                        <td><span class="style5">43</span></td>
                        <td><span class="style5">55</span></td>
                        <td><span class="style5">31</span></td>
                        <td><span class="style5">145</span></td>
                        <td><span class="style5">486</span></td>
                        <td><span class="style5">687</span></td>
                        <td><span class="style5">589</span></td>
                        <td><span class="style5">0</span></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="new"><span class="style5 style6">SIURI</span></td>
                        <td><span class="style5">255</span></td>
                        <td><span class="style5">72</span></td>
                        <td><span class="style5">85</span></td>
                        <td><span class="style5">270</span></td>
                        <td><span class="style5">104</span></td>
                        <td><span class="style5">234</span></td>
                        <td><span class="style5">128</span></td>
                        <td><span class="style5">35</span></td>
                        <td><span class="style5">249</span></td>
                        <td><span class="style5">101</span></td>
                        <td><span class="style5">487</span></td>
                        <td><span class="style5">63</span></td>
                        <td><span class="style5">244</span></td>
                        <td><span class="style5">179</span></td>
                        <td><span class="style5">475</span></td>
                        <td><span class="style5">487</span></td>
                        <td><span class="style5">463</span></td>
                        <td><span class="style5">577</span></td>
                        <td><span class="style5">211</span></td>
                        <td><span class="style5">258</span></td>
                        <td><span class="style5">157</span></td>
                        <td><span class="style5">432</span></td>
                        <td><span class="style5">0</span></td>
                    </tr>
                    <tr>
                        <td class="rotate style6"></td>
                        <td class="rotate style6">ALIPUR</td>
                        <td class="rotate style6">ASANSOL</td>
                        <td class="rotate style6">BAHARAMPUR</td>
                        <td class="rotate style6">BALURGHAT</td>
                        <td class="rotate style6">BANKURA</td>
                        <td class="rotate style6">BARASAT</td>
                        <td class="rotate style6">BARDDHAMAN</td>
                        <td class="rotate style6">BOLPUR</td>
                        <td class="rotate style6">KOLKATA</td>
        
                        <td class="rotate style6">CHITTARANJAN</td>
                        <td class="rotate style6">DARJILING</td>
                        <td class="rotate style6">DURGAPUR</td>
                        <td class="rotate style6">HAORA</td>
                        <td class="rotate style6">INGRAZ BAZAR</td>
                        <td class="rotate style6">JALPAIGURI</td>
                        <td class="rotate style6">KALIMPONG</td>
                        <td class="rotate style6">KARSIYANG</td>
                        <td class="rotate style6">KOCH BIHAR</td>
                        <td class="rotate style6">KRISHNANAGAR</td>
                        <td class="rotate style6">MEDINIPUR</td>
                        <td class="rotate style6">PURULIYA</td>
                        <td class="rotate style6">SHILIGURI</td>
                        <td class="rotate style6">SIURI</td>
                    </tr>
                </tbody></table>
            </div>         
        </div>
    </div>
</section>
@endsection



