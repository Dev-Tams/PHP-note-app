
     <nav id="nav">
        <ul>
            <?php foreach($nav_links as $nav):?>
            <li>
                <a href="<?= $nav['link'];?>" target="_parent">  <?= $nav['name'];?></a>
            </li>
            <?php endforeach;?>

            <li>
            <?php if ($_SESSION['user'] ?? false):?>
                  <a href="/notes"><?= urlIs('/notes')?>Notes</a>
                  <?php endif;?>
            </li>
       </ul>

       
            <?php if($_SESSION['user']?? false) :?>
              <form method="POST" action="/logout">
                <input type="hidden" name="_method" value="DELETE">
                <button>Log out</button>
              </form>
            <?php else : ?>
                <li><a href="/register"> Register</a></li>

                    <li><a href="/login">Login</a></li>
             <?php endif; ?>
        </ul>
    </nav>

