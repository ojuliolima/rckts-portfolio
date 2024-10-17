<?php 

    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => '#', 'texto' => 'Github'],
        ['href' => '#', 'texto' => 'LinkedIn'],
        ['href' => '#', 'texto' => 'Twitter'],
    ];
?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <div class="font-bold font-mono text-xl">
        💻 Meu Portfolio
    </div>
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach($itens as $item): ?>
            <li>
                <a class="hover:underline" href="<?= $item['href'] ?>"><?= $item['texto'] ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</header>