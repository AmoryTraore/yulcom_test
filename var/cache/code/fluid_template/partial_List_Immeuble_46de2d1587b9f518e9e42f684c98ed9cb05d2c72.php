<?php

class partial_List_Immeuble_46de2d1587b9f518e9e42f684c98ed9cb05d2c72 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '<div class="col-12 col-md-6 col-xl-4">
    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
        <!-- Property Thumbnail -->
        <div class="property-thumb">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                <!-- media preview element -->
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output73 = '';

$output73 .= '
                    <div class="news-img-wrap">
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};
$arguments86 = [];
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['aria'] = NULL;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['alt'] = NULL;
$arguments86['ismap'] = NULL;
$arguments86['longdesc'] = NULL;
$arguments86['usemap'] = NULL;
$arguments86['loading'] = NULL;
$arguments86['decoding'] = NULL;
$arguments86['src'] = '';
$arguments86['treatIdAsReference'] = false;
$arguments86['image'] = NULL;
$arguments86['crop'] = NULL;
$arguments86['cropVariant'] = 'default';
$arguments86['fileExtension'] = NULL;
$arguments86['width'] = NULL;
$arguments86['height'] = NULL;
$arguments86['minWidth'] = NULL;
$arguments86['minHeight'] = NULL;
$arguments86['maxWidth'] = NULL;
$arguments86['maxHeight'] = NULL;
$arguments86['absolute'] = false;
$arguments86['class'] = 'bg-img';
$arguments86['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments86['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments86['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments86['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return NULL;
};
$arguments88 = [];
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = [];
$array90['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments88['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments86['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};
$arguments92 = [];
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = [];
$array94['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments92['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments86['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
                                ';
return $output85;
};
$arguments81 = [];
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = [];
$array83['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array83['1'] = ' == 2';

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = $renderChildrenClosure82;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
$output100 = '';

$output100 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};
$arguments101 = [];
$arguments101['section'] = NULL;
$arguments101['partial'] = NULL;
$arguments101['delegate'] = NULL;
$arguments101['renderable'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['optional'] = false;
$arguments101['default'] = NULL;
$arguments101['contentAs'] = NULL;
$arguments101['debug'] = true;
$arguments101['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array103 = [];
$array103['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments101['arguments'] = $array103;

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
                                ';
return $output100;
};
$arguments96 = [];
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = [];
$array98['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array98['1'] = ' == 4';

$expression99 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output80 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
$output108 = '';

$output108 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};
$arguments109 = [];
$arguments109['additionalAttributes'] = NULL;
$arguments109['data'] = NULL;
$arguments109['aria'] = NULL;
$arguments109['class'] = NULL;
$arguments109['dir'] = NULL;
$arguments109['id'] = NULL;
$arguments109['lang'] = NULL;
$arguments109['style'] = NULL;
$arguments109['title'] = NULL;
$arguments109['accesskey'] = NULL;
$arguments109['tabindex'] = NULL;
$arguments109['onclick'] = NULL;
$arguments109['alt'] = NULL;
$arguments109['ismap'] = NULL;
$arguments109['longdesc'] = NULL;
$arguments109['usemap'] = NULL;
$arguments109['loading'] = NULL;
$arguments109['decoding'] = NULL;
$arguments109['src'] = '';
$arguments109['treatIdAsReference'] = false;
$arguments109['image'] = NULL;
$arguments109['crop'] = NULL;
$arguments109['cropVariant'] = 'default';
$arguments109['fileExtension'] = NULL;
$arguments109['width'] = NULL;
$arguments109['height'] = NULL;
$arguments109['minWidth'] = NULL;
$arguments109['minHeight'] = NULL;
$arguments109['maxWidth'] = NULL;
$arguments109['maxHeight'] = NULL;
$arguments109['absolute'] = false;
$arguments109['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments109['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments109['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments109['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};
$arguments111 = [];
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array113 = [];
$array113['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)
					),
					$renderingContext
				);
$arguments111['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments111['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments109['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};
$arguments115 = [];
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array117 = [];
$array117['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments115['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments109['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
                                ';
return $output108;
};
$arguments104 = [];
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = [];
$array106['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array106['1'] = ' == 5';

$expression107 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['__thenClosure'] = $renderChildrenClosure105;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output80 .= '
                            ';
return $output80;
};
$arguments77 = [];
$arguments77['map'] = NULL;
// Rendering Array
$array79 = [];
$array79['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments77['map'] = $array79;

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                        ';
return $output76;
};
$arguments74 = [];
$arguments74['additionalAttributes'] = NULL;
$arguments74['data'] = NULL;
$arguments74['aria'] = NULL;
$arguments74['class'] = NULL;
$arguments74['dir'] = NULL;
$arguments74['id'] = NULL;
$arguments74['lang'] = NULL;
$arguments74['style'] = NULL;
$arguments74['title'] = NULL;
$arguments74['accesskey'] = NULL;
$arguments74['tabindex'] = NULL;
$arguments74['onclick'] = NULL;
$arguments74['newsItem'] = NULL;
$arguments74['settings'] = array (
);
$arguments74['uriOnly'] = false;
$arguments74['configuration'] = array (
);
$arguments74['content'] = '';
$arguments74['section'] = NULL;
$arguments74['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments74['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments74['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output73 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                    </div>
                ';
return $output73;
};
$arguments71 = [];

$output70 .= '';

$output70 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
$output121 = '';

$output121 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
$output126 = '';

$output126 .= '
                        <div class="news-img-wrap">
                            <span class="no-media-element">
                                ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
$output129 = '';

$output129 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure131 = function() use ($renderingContext) {
return NULL;
};
$arguments130 = [];
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['aria'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['alt'] = NULL;
$arguments130['ismap'] = NULL;
$arguments130['longdesc'] = NULL;
$arguments130['usemap'] = NULL;
$arguments130['loading'] = NULL;
$arguments130['decoding'] = NULL;
$arguments130['src'] = '';
$arguments130['treatIdAsReference'] = false;
$arguments130['image'] = NULL;
$arguments130['crop'] = NULL;
$arguments130['cropVariant'] = 'default';
$arguments130['fileExtension'] = NULL;
$arguments130['width'] = NULL;
$arguments130['height'] = NULL;
$arguments130['minWidth'] = NULL;
$arguments130['minHeight'] = NULL;
$arguments130['maxWidth'] = NULL;
$arguments130['maxHeight'] = NULL;
$arguments130['absolute'] = false;
$arguments130['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments130['title'] = '';
$arguments130['alt'] = '';
$arguments130['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};
$arguments132 = [];
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = [];
$array134['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression135 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression135(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments132['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments130['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
return NULL;
};
$arguments136 = [];
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = [];
$array138['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression139 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments136['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments130['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                                ';
return $output129;
};
$arguments127 = [];
$arguments127['additionalAttributes'] = NULL;
$arguments127['data'] = NULL;
$arguments127['aria'] = NULL;
$arguments127['class'] = NULL;
$arguments127['dir'] = NULL;
$arguments127['id'] = NULL;
$arguments127['lang'] = NULL;
$arguments127['style'] = NULL;
$arguments127['title'] = NULL;
$arguments127['accesskey'] = NULL;
$arguments127['tabindex'] = NULL;
$arguments127['onclick'] = NULL;
$arguments127['newsItem'] = NULL;
$arguments127['settings'] = array (
);
$arguments127['uriOnly'] = false;
$arguments127['configuration'] = array (
);
$arguments127['content'] = '';
$arguments127['section'] = NULL;
$arguments127['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments127['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments127['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output126 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                            </span>
                        </div>
                    ';
return $output126;
};
$arguments122 = [];
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = [];
$array124['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                ';
return $output121;
};
$arguments119 = [];
$arguments119['if'] = NULL;

$output70 .= '';

$output70 .= '
            ';
return $output70;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = [];
$array68['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews');

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
                    <div class="news-img-wrap">
                        ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['aria'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['alt'] = NULL;
$arguments16['ismap'] = NULL;
$arguments16['longdesc'] = NULL;
$arguments16['usemap'] = NULL;
$arguments16['loading'] = NULL;
$arguments16['decoding'] = NULL;
$arguments16['src'] = '';
$arguments16['treatIdAsReference'] = false;
$arguments16['image'] = NULL;
$arguments16['crop'] = NULL;
$arguments16['cropVariant'] = 'default';
$arguments16['fileExtension'] = NULL;
$arguments16['width'] = NULL;
$arguments16['height'] = NULL;
$arguments16['minWidth'] = NULL;
$arguments16['minHeight'] = NULL;
$arguments16['maxWidth'] = NULL;
$arguments16['maxHeight'] = NULL;
$arguments16['absolute'] = false;
$arguments16['class'] = 'bg-img';
$arguments16['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments16['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments16['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments16['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};
$arguments18 = [];
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = [];
$array20['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments18['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments16['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};
$arguments22 = [];
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = [];
$array24['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments22['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments16['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                                ';
return $output15;
};
$arguments11 = [];
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = [];
$array13['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array13['1'] = ' == 2';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};
$arguments31 = [];
$arguments31['section'] = NULL;
$arguments31['partial'] = NULL;
$arguments31['delegate'] = NULL;
$arguments31['renderable'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['optional'] = false;
$arguments31['default'] = NULL;
$arguments31['contentAs'] = NULL;
$arguments31['debug'] = true;
$arguments31['partial'] = 'Detail/MediaVideo';
// Rendering Array
$array33 = [];
$array33['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments31['arguments'] = $array33;

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                                ';
return $output30;
};
$arguments26 = [];
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = [];
$array28['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array28['1'] = ' == 4';

$expression29 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 4);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output10 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};
$arguments39 = [];
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['aria'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['alt'] = NULL;
$arguments39['ismap'] = NULL;
$arguments39['longdesc'] = NULL;
$arguments39['usemap'] = NULL;
$arguments39['loading'] = NULL;
$arguments39['decoding'] = NULL;
$arguments39['src'] = '';
$arguments39['treatIdAsReference'] = false;
$arguments39['image'] = NULL;
$arguments39['crop'] = NULL;
$arguments39['cropVariant'] = 'default';
$arguments39['fileExtension'] = NULL;
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['minWidth'] = NULL;
$arguments39['minHeight'] = NULL;
$arguments39['maxWidth'] = NULL;
$arguments39['maxHeight'] = NULL;
$arguments39['absolute'] = false;
$arguments39['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement');
$arguments39['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title');
$arguments39['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative');
$arguments39['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};
$arguments41 = [];
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = [];
$array43['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments41['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments39['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};
$arguments45 = [];
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = [];
$array47['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments45['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments39['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                                ';
return $output38;
};
$arguments34 = [];
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array36 = [];
$array36['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type');
$array36['1'] = ' == 5';

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 5);};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = $renderChildrenClosure35;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output10 .= '
                            ';
return $output10;
};
$arguments7 = [];
$arguments7['map'] = NULL;
// Rendering Array
$array9 = [];
$array9['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0');
$arguments7['map'] = $array9;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                        ';
return $output6;
};
$arguments4 = [];
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['newsItem'] = NULL;
$arguments4['settings'] = array (
);
$arguments4['uriOnly'] = false;
$arguments4['configuration'] = array (
);
$arguments4['content'] = '';
$arguments4['section'] = NULL;
$arguments4['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments4['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output3 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
                    </div>
                ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
                        <div class="news-img-wrap">
                            <span class="no-media-element">
                                ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output57 = '';

$output57 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};
$arguments58 = [];
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['aria'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['alt'] = NULL;
$arguments58['ismap'] = NULL;
$arguments58['longdesc'] = NULL;
$arguments58['usemap'] = NULL;
$arguments58['loading'] = NULL;
$arguments58['decoding'] = NULL;
$arguments58['src'] = '';
$arguments58['treatIdAsReference'] = false;
$arguments58['image'] = NULL;
$arguments58['crop'] = NULL;
$arguments58['cropVariant'] = 'default';
$arguments58['fileExtension'] = NULL;
$arguments58['width'] = NULL;
$arguments58['height'] = NULL;
$arguments58['minWidth'] = NULL;
$arguments58['minHeight'] = NULL;
$arguments58['maxWidth'] = NULL;
$arguments58['maxHeight'] = NULL;
$arguments58['absolute'] = false;
$arguments58['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage');
$arguments58['title'] = '';
$arguments58['alt'] = '';
$arguments58['loading'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.lazyLoading');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};
$arguments60 = [];
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = [];
$array62['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth');
$arguments60['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth');
$arguments58['maxWidth'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};
$arguments64 = [];
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = [];
$array66['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight');
$arguments64['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight');
$arguments58['maxHeight'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                                ';
return $output57;
};
$arguments55 = [];
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['aria'] = NULL;
$arguments55['class'] = NULL;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['newsItem'] = NULL;
$arguments55['settings'] = array (
);
$arguments55['uriOnly'] = false;
$arguments55['configuration'] = array (
);
$arguments55['content'] = '';
$arguments55['section'] = NULL;
$arguments55['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments55['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments55['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output54 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                            </span>
                        </div>
                    ';
return $output54;
};
$arguments50 = [];
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = [];
$array52['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia');

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['__thenClosure'] = $renderChildrenClosure51;

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                ';
return $output49;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

            <div class="tag">
                <span>';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.firstCategory.title')]);

$output0 .= '</span>
            </div>
            <div class="list-price">
                <p>$945 679</p>
            </div>
        </div>
        <!-- Property Content -->
        <div class="property-content">
            <h5>
                ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
$output142 = '';

$output142 .= '
                    <span itemprop="headline">';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title')]);

$output142 .= '</span>
                ';
return $output142;
};
$arguments140 = [];
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['aria'] = NULL;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['newsItem'] = NULL;
$arguments140['settings'] = array (
);
$arguments140['uriOnly'] = false;
$arguments140['configuration'] = array (
);
$arguments140['content'] = '';
$arguments140['section'] = NULL;
$arguments140['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem');
$arguments140['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$arguments140['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title');

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output0 .= '
            </h5>
            <p class="location"><img src="img/icons/location.png" alt="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser');
};
$arguments145 = [];
$arguments145['maxCharacters'] = NULL;
$arguments145['append'] = '&hellip;';
$arguments145['respectWordBoundaries'] = true;
$arguments145['respectHtml'] = true;
$arguments145['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array147 = [];
$array147['0'] = 1;

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments145['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);
};
$arguments143 = [];
$arguments143['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output0 .= '</p>
            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext');
};
$arguments151 = [];
$arguments151['maxCharacters'] = NULL;
$arguments151['append'] = '&hellip;';
$arguments151['respectWordBoundaries'] = true;
$arguments151['respectHtml'] = true;
$arguments151['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters');
// Rendering Boolean node
// Rendering Array
$array153 = [];
$array153['0'] = 1;

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);
};
$arguments149 = [];
$arguments149['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output0 .= '</p>

        </div>
    </div>
</div>';

return $output0;
}


}
#