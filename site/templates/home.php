<?php
    $this->layout('layout/template_'.$this->e($goal), [
        'title' => 'Home',
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

<main role="main" class="groups-content container">
    <div class="row">
        <section class="col-md-12 col-lg-8">
            <graphjs-feed></graphjs-feed>
        </section>
        <aside class="groups-sidebar d-none d-lg-block col-lg-4">
            <div class="register-box public-feature">
                 <graphjs-auth-register min-width="100%" max-width="100%"></graphjs-auth-register>
            </div>
            <div class="groups-information groups-box private-feature">
                <div class="title">About</div>
                <div class="content">
                    CFMi is Coaching For More...interactive! Your online hub for connecting, learning and sharing.
                    <br /><br />
                    Since launching in 1999 CFM Consulting has grown to become one of the leaders in business and executive coaching in the UK and overseas, working across a range of sectors.
                    <br /><br />
                    We deliver courses for all levels from beginner to master practitioner. We also offer a variety of coaching and mentoring materials to support coaches and their clients. Now, we are thrilled to offer you an online, mobile, interactive community to ensure your CFM experience has maximum impact and benefit.
                </div>
            </div>
            <div class="groups-invitation groups-box private-feature">
                <div class="title">Invite people to this group</div>
                <div class="content addthis_inline_share_toolbox"></div>
            </div>
        </aside>
    </div>
</main>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c179bca02a7f34e"></script>
