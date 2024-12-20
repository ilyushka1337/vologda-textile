<div class="container container-sm content-block">
    <div class="content-faq-list">
        <?php
        foreach ($block["faq"] as $faq) {
            echo tpl("ui/accordion", [
                "name" => $faq["question"],
                "content" => $faq["answer"],
            ]);
        }
        ?>
    </div>
</div>