<form accept-charset="UTF-8" role="search" id="searchform" method="post" action="/search">
  <div>
    <label for="edit-keys-1" class="element-invisible screen-reader-text">Enter your keywords </label>
    <input type="text" value="" name="edit-keys-1" id="edit-keys-1" placeholder="Search govdex support">
    <button type="submit" id="searchsubmit" class="submit">
      <span class="fa fa-search"></span>
      <span class="screen-reader-text">Search</span>
    </button>

    <input type="hidden" value="1" name="id">
    <input type="hidden" name="form_id" value="searchform">
    <?php print $variables['elements']['base_1']['#children']; ?>
    <?php print $variables['elements']['id']['#children']; ?>
    <?php print $variables['elements']['form_build_id']['#children']; ?>
  </div>
</form>
