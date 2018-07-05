[{$smarty.block.parent}]
[{assign var=sBadgePath value=$product->getBadge()}]

[{if $sBadgePath}]
    <img src="[{$sBadgePath}]">
[{/if}]
