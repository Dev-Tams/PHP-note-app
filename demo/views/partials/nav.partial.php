
     <nav>
        <ul>
            <?php foreach($nav_links as $nav):?>
            <li>
                <a href="<?= $nav['link'];?>" target="_parent">  <?= $nav['name'];?></a>
            </li>
            <?php endforeach;?>
        </ul>
       
    </nav>
    <p> Hello <b> <?= $_SESSION['name'] ?? 'Guest,'?></b> Welcome</p>

<!-- <nav>
    <li>
        <a href="home" class="<?= urlIs('/')?>"> Home</a>
    </li>
    <li>
        <a href="about" class="<?= urlIs('/about')?>"> About us</a>
    </li>
    <li>
        <a href="contact" class="<?= urlIs('/contact')?>"> Contact us</a>
    </li>
</nav> -->