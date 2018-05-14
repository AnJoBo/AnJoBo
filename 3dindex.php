<?php 
$pageTitle = '3D Page';
include 'inc/reqs.php'; ?>
<div class="main-content">
    <a-scene>

        <a-camera position="0 2 0">
            <!--<a-cursor></a-cursor>-->
        </a-camera>

        <!--
        <a-link id="orginalSite"
                title="Regular Site"
                position="-5 2 0"
                rotation="0 -90 0"
                src="images/2d.png"
                href="https://anjobo.github.io/">
        </a-link>
        -->

        <a-assets>
            <a-asset-item id="test" src="gltf/test.gltf"></a-asset-item>
        </a-assets>
      
        <a-gltf-model src="#test" position="0 1 -5"></a-gltf-model>
    
        <a-entity position="0 0 0">
            <a-text align="center" 
                position="0 4 -3" 
                value="Andrew J. Borkowski">
                    <a-text id="nameShadow"
                        align="center" 
                        position="0.01 -0.01 -0.01"
                        color="black" 
                        value="Andrew J. Borkowski">
                </a-text>
            </a-text>
            <a-text align="center" 
                position="0 4 -3.4"
                width="2.5"
                value="Full-Stack Web Developer and AR/VR Enthusiast">
                    <a-text align="center" 
                        position="0.01 -0.01 -0.01"
                        width="2.5"
                        color="black"
                        value="Full-Stack Web Developer and AR/VR Enthusiast">
            </a-text>
            </a-text>

            
            
            
            <a-torus position="0 3 -3.6" 
                    radius="1" radius-tubular="0.007"
                    segments-tubular="64" 
                    color="black">
                <a-circle position="0 0 0" src="images/me01.png"></a-circle>
            </a-torus>
                
            
        </a-entity>

        <!--
        <a-plane position="0 2 -16" rotation="0 0 0" 
                width="55" height="38" 
                material="color: #fff; shader: flat"
                src="images/background_img.jpg"></a-plane>
        -->

        <a-sky color="#ECECEC" src=""></a-sky>
        
</div>
        
<?php include 'inc/content.php'; ?>