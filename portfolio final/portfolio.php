<?php
// ---- Site data: edit here ----
$name   = 'John Lloyd Aldaya';
$full   = 'John Lloyd Acha Aldaya';
$roles  = ['Student', 'IT Course', 'Freelancer'];
$email  = 'johnlloydaldaya2020@gmail.com';
$phone  = '09702439104';
$fb     = 'https://facebook.com/cookielaloy';
$intro  = 'Hi! I\'m John Lloyd Aldaya, a passionate and dedicated student currently pursuing a degree in Information Technology. With a strong interest in technology and a drive for continuous learning, I am committed to developing my skills and knowledge in the IT field. I am eager to explore various aspects of technology, from programming and software development to networking and cybersecurity. As a freelancer, I have had the opportunity to work on diverse projects, allowing me to apply my skills in real-world scenarios and gain valuable experience. I am excited about the future and look forward to contributing to the ever-evolving world of technology.';

$skills = [
  ['img'=>'html.jpeg','alt'=>'HTML','title'=>'HTML','text'=>'Experienced in creating structured and semantic web pages using HTML5.'],
  ['img'=>'css.jpeg','alt'=>'CSS','title'=>'CSS','text'=>'Skilled in styling web pages with CSS, including responsive design techniques.'],
  ['img'=>'java.jpg','alt'=>'Java','title'=>'Java','text'=>'Proficient in object-oriented programming and problem-solving using Java.'],
  ['img'=>'flexbox.jpg','alt'=>'Flexbox','title'=>'Flexbox','text'=>'Experienced in creating flexible and responsive layouts using CSS Flexbox.']
];

$learning = [
  ['img'=>'flexbox.jpg','alt'=>'Flexbox','title'=>'Flexbox','text'=>'Learning how to use CSS Flexbox to create flexible and responsive layouts.'],
  ['img'=>'grid.png','alt'=>'Grid','title'=>'Grid','text'=>'Understanding how to use CSS Grid to create complex, responsive layouts.'],
  ['img'=>'media.png','alt'=>'Media queries','title'=>'Media queries','text'=>'Learning how to create responsive designs that adapt to different screen sizes and devices.'],
  ['img'=>'html.jpeg','alt'=>'HTML','title'=>'HTML','text'=>'Learning how to create structured and semantic web pages using HTML5.']
];

$likes = [
  ['img'=>'gaming.jpg','alt'=>'Gaming','title'=>'🎮 Gaming','text'=>'I enjoy this kind of shooting games because it can improve my critical thinking and also decision making in every scenario. Improves my problem-solving, reaction time, and strategic thinking.','video'=>'valorant.mp4'],
  ['img'=>'music.jpg','alt'=>'Music','title'=>'🎧 Music','text'=>'I like this song because it reminds me of a soulful love song about feeling incredibly lucky to have found someone special after going through difficult times. The song expresses gratitude, devotion, and the sense that the relationship feels almost divinely blessed. Helps me focus while coding and boosts creativity.','video'=>'getyou.mp4'],
  ['img'=>'food.jpg','alt'=>'Cooking','title'=>'🍳 Cooking','text'=>'I love eating spicy adobo with juicy pork and with eggs. Teaches patience and attention to detail.','video'=>'adobo.mp4'],
  ['img'=>'movie.jpg','alt'=>'Movies','title'=>'🎬 Movies','text'=>'I like this movie because it teaches us that love, hope, and human curiosity are powerful forces that help humanity survive even in the most difficult situations. Through the journey of Joseph Cooper and the scientists searching for a new home for mankind, the film shows the importance of trusting science, making sacrifices, and valuing time with the people we love. Inspires curiosity and interest in science and technology.','video'=>'interstellar.mp4'],
  ['img'=>'green.png','alt'=>'Basketball','title'=>'🏀 Sports','text'=>'I love the concept of basketball. Develops teamwork, communication, and discipline. It has physical and mental fight where you will strategize how you attack the opponents and score. When in defense you think about how they will create their attack and stop it.','video'=>'basketball.mp4']
];

// phone: 09XXXXXXXXX -> +639XXXXXXXXX for the tel: link
$tel = '+63' . substr($phone, 1);
function e($t) { return htmlspecialchars($t, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>John Lloyd Aldaya | Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,400..900&family=Newsreader:opsz,wght@6..72,400;6..72,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="nav" aria-label="Main">
  <div class="wrap">
    <b>JLA</b>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#certificate">Certificate</a></li>
      <li><a href="#learning">Learning</a></li>
      <li><a href="#likes">Likes</a></li>
      <li><a href="#reel">Demo reel</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <button class="theme" id="theme" type="button" aria-label="Switch between light and dark">Light / Dark</button>
  </div>
</nav>

<header class="hero">
  <div class="wrap">
    <div>
      <h1><?= e($name) ?></h1>
      <p class="role"><?= e(implode(' | ', $roles)) ?></p>
    </div>
    <div class="photo" id="photo"><img src="../image/FB_IMG_1773112667550.jpg" alt="Portrait of <?= e($name) ?>" onerror="this.parentElement.classList.add('empty')"></div>
  </div>
</header>

<section id="about">
  <div class="wrap">
    <h2>Introduction</h2>
    <p class="lead"><?= e($intro) ?></p>
  </div>
</section>

<section id="skills">
  <div class="wrap">
    <h2>Skills</h2>
    <div class="grid">
      <?php foreach ($skills as $c): ?>
      <article class="card"><img class="thumb" src="../image/<?= e($c['img']) ?>" alt="<?= e($c['alt']) ?>"><div class="body"><h3><?= e($c['title']) ?></h3><p><?= e($c['text']) ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="certificate">
  <div class="wrap cert">
    <div>
      <h2>Certificate</h2>
      <h3>SQL</h3>
      <p>I learned how to create a database and command it with simple commands.</p>
    </div>
    <img src="../image/certificate.jpg" alt="SQL certificate">
  </div>
</section>

<section id="learning">
  <div class="wrap">
    <h2>Currently learning</h2>
    <div class="grid">
      <?php foreach ($learning as $c): ?>
      <article class="card"><img class="thumb" src="../image/<?= e($c['img']) ?>" alt="<?= e($c['alt']) ?>"><div class="body"><h3><?= e($c['title']) ?></h3><p><?= e($c['text']) ?></p></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="likes">
  <div class="wrap">
    <h2>Interests &amp; activities</h2>
    <p class="sub">These activities help me stay creative, disciplined, and continuously learning outside of coding.</p>
    <div class="likes">
      <?php foreach ($likes as $c): ?>
      <article class="card">
        <img class="thumb" src="../image/<?= e($c['img']) ?>" alt="<?= e($c['alt']) ?>">
        <video controls preload="none"><source src="../videos/<?= e($c['video']) ?>" type="video/mp4"></video>
        <div class="body"><h3><?= e($c['title']) ?></h3><p><?= e($c['text']) ?></p></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="reel" class="reel">
  <div class="wrap">
    <h2>Demo reel</h2>
    <p class="sub">A showcase of my work and projects, highlighting my skills, creativity, and dedication to delivering high-quality results.</p>
    <video controls preload="metadata"><source src="../videos/VIDEO_f99f8f08-9e25-4e1c-98d7-a3c819e797d2.mp4" type="video/mp4"></video>
  </div>
</section>

<section id="contact" class="contact">
  <div class="wrap">
    <h2>Contact</h2>
    <a class="ic" href="<?= e($fb) ?>" target="_blank" rel="noopener"><img src="../image/fblogo.png" alt=""><?= e($full) ?></a>
    <a class="ic" href="mailto:<?= e($email) ?>"><img src="../image/gmail.png" alt=""><?= e($email) ?></a>
    <p class="phone">Phone (PH): <a href="tel:<?= e($tel) ?>"><?= e($phone) ?></a></p>
  </div>
</section>

<footer>© <?= date('Y') ?> <?= e($full) ?></footer>

<script>
(function(){
  var root=document.documentElement,btn=document.getElementById('theme');
  try{var s=localStorage.getItem('theme');if(s)root.dataset.theme=s}catch(e){}
  btn.addEventListener('click',function(){
    var dark=root.dataset.theme?root.dataset.theme==='dark':matchMedia('(prefers-color-scheme:dark)').matches;
    root.dataset.theme=dark?'light':'dark';
    try{localStorage.setItem('theme',root.dataset.theme)}catch(e){}
  });
})();
</script>
</body>
</html>
