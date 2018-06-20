<?php if(! defined('ABSPATH')){ return; } ?>
<svg width="2700px" height="64px" class="svgmask" viewBox="0 0 2700 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask5">
            <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetInner1"></feOffset>
            <feGaussianBlur stdDeviation="1.5" in="shadowOffsetInner1" result="shadowBlurInner1"></feGaussianBlur>
            <feComposite in="shadowBlurInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
            <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.45 0" in="shadowInnerInner1" type="matrix" result="shadowMatrixInner1"></feColorMatrix>
            <feMerge>
                <feMergeNode in="SourceGraphic"></feMergeNode>
                <feMergeNode in="shadowMatrixInner1"></feMergeNode>
            </feMerge>
        </filter>
    </defs>
    <path d="M1892,0 L2119,44.993 L2701,45 L2701.133,63.993 L-0.16,63.993 L1.73847048e-12,45 L909,44.993 L1892,0 Z" class="bmask-bgfill" fill="#f5f5f5" filter="url(#filter-mask5)"  style="fill:<?php echo $bgcolor; ?>"></path>
    <path d="M2216,44.993 L2093,55 L1882,6 L995,62 L966,42 L1892,0 L2118,44.993 L2216,44.993 L2216,44.993 Z" fill="#cd2122" class="bmask-customfill" filter="url(#filter-mask5)"></path>
</svg>
