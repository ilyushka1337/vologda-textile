<div class="content-faq-list content-block">
    <?php
    foreach ($block["faq"] as $faq) {
        echo tpl("ui/accordion", [
            "name" => $faq["question"],
            "content" => $faq["answer"],
        ]);
    }
    ?>
</div>