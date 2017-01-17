<form accept-charset="UTF-8" role="search" id="searchform" method="post" action="/search">
  <div>
    <label for="edit-keys-1" class="element-invisible screen-reader-text">Enter your keywords </label>
    <input type="text" id="edit-keys-1" name="keys_1" value="" size="30" maxlength="128" class="form-text" placeholder="Search govdex support">
    <?php print $variables['elements']['id']['#children']; ?>
    <button type="submit" id="searchsubmit" class="submit" name="op" value="Search">
      <span class="fa fa-search"></span>
      <span class="screen-reader-text">Search</span>
    </button>
    <?php print $variables['elements']['form_build_id']['#children']; ?>
    <?php print $variables['elements']['form_id']['#children']; ?>
  </div>
</form>
