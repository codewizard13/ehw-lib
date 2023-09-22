<?php

function id_based_permalink($return, $id, $new_title, $new_slug)
{
  $oldURL = 'https://example.com/?p=' . $id;
  $siteDomain = $_SERVER['HTTP_HOST'];
  $protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
  $homeURL = get_home_url();
  $postURL = $homeURL . "/?p=" . $id;
//   $postURL = $protocol . '://' . $siteDomain . "/?p=" . $id;


  $outHTML = <<<OUT
  <style>
  .elsm-box-style-01 {
    color: cadetblue;
    background: aliceblue;
    border-radius: .6rem;
    border: solid 2px navy;
    padding: .8rem;
    display: inline-block;
    margin: 1rem auto;
    min-width: 17rem;
    box-sizing: border-box;
  }

  .elsm-box-style-01 > input {
    color: brown !important;
  }

  .elsm-w-100-percent {
    width: 100%;
  }
</style>


<!-- ID URL box v. 2 -->
<section class="elsm-box-style-01" style="width: 30rem;">
  <label for="postIdURL">URL for Email Newsletter:</label>
  <input value="{$postURL}" type="text" id="postIdURL" name="postIdURL" readonly="" style="
    width: 17rem;
    margin-left: 1rem;">
</section>

<br><!-- BR needed because section is inline-block -->
<hr color="#888" width="2px" />


<script>
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    document.execCommand("Copy");
    alert("Copied the text: " + copyText.value);
  }
</script>

OUT;

  return $return . '<br>' . $outHTML;
}
add_filter("get_sample_permalink_html", "id_based_permalink", 10, 4);