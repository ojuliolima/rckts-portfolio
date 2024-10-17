<?php
$path = __DIR__ . '/../../vendor/simple-icons/simple-icons/icons/';

$itens = [
    ['href' => '#', 'alt' => 'Logo do Twitter', 'src' => file_get_contents(realpath($path . '/x.svg')), 'color' => '#ffffff'],
    ['href' => '#', 'alt' => 'Logo do Facebook', 'src' => file_get_contents(realpath($path . '/facebook.svg')), 'color' => '#ffffff'],
    ['href' => '#', 'alt' => 'Logo do LinkedIn', 'src' => file_get_contents(realpath($path . '/linkedin.svg')), 'color' => '#ffffff'],
    ['href' => '#', 'alt' => 'Logo do YouTube', 'src' => file_get_contents(realpath($path . '/youtube.svg')), 'color' => '#ffffff'],
];
?>

<section class="flex gap-x-3">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Olá, meu nome é Julio</h1>
        <p class="text-xl leading-6 mt-6">Sou desenvolvedor PHP a mais de cinco anos, me especializando em Laravel. Possuo experiências em Java e em desenvolvimento de jogos</p>
        <ul class="flex gap-x-3 mt-8">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>"><span class="h-7 w-7 hover:animate-bounce block"> <?= str_replace('<svg ', '<svg fill="' . $item['color'] . '"', $item['src']); ?> </span></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="w-1/3 flex justify-center items-center">
        <img class="h-32 rounded-full" src="https://github.com/ojuliolima.png" alt="Minha foto de perfil">
    </div>
</section>