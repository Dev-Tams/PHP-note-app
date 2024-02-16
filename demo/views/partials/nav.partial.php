
     <nav id="nav">
        <ul>
            <?php foreach($nav_links as $nav):?>
            <li>
                <a href="<?= $nav['link'];?>" target="_parent">  <?= $nav['name'];?></a>
            </li>
            <?php endforeach;?>

          <!-- if user logged in, it displays the note nav -->
            <?php if ($_SESSION['user'] ?? false):?>
              <li>
                  <a href="/notes">Notes</a>
              </li>
                  <?php endif;?>
           

       
            <?php if($_SESSION['user']?? false) :?>
              <form method="POST" action="/logout">
                <input type="hidden" name="_method" value="DELETE">
                <button class="die">Log out</button>
              </form>
            <?php else : ?>
                <li><a href="/register"> Register</a></li>

                    <li><a href="/login">Login</a></li>
             <?php endif; ?>
        </ul>
    </nav>

