<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Feed',
        'brand'     => $this->e($brand),
        'public_id'=>$this->e($public_id),
        'primary_color' => $this->e($primaryColor),
        'text_color' => $this->e($textColor),
        'background_color' => $this->e($backgroundColor),
        'host' => $this->e($host),
        'stream_host' => $this->e($streamHost),
        "theme" => $this->e($theme),
        "name"  => $this->e($name),
        "goal" => $this->e($goal)
    ]);
?>

<main role="main" class="groups-content container-fluid p-0 mt-0">
    <graphjs-feed-item data-reference="feed" box="disabled"></graphjs-feed-item>
</main>
<script>
    addAttributes('feed', [
        'id' // The list of parameters attributed to tag
    ]);
</script>