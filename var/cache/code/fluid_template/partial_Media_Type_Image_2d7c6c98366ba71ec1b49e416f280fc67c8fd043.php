<?php

class partial_Media_Type_Image_2d7c6c98366ba71ec1b49e416f280fc67c8fd043 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output46 = '';

$output46 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};
$arguments53 = [];
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['renderable'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['debug'] = true;
$arguments53['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array55 = [];
$array55['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array55['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array55['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array55['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments53['arguments'] = $array55;

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
            ';
return $output52;
};
$arguments50 = [];
$arguments50['parameter'] = NULL;
$arguments50['target'] = '';
$arguments50['class'] = '';
$arguments50['title'] = '';
$arguments50['language'] = NULL;
$arguments50['additionalParams'] = '';
$arguments50['additionalAttributes'] = array (
);
$arguments50['addQueryString'] = false;
$arguments50['addQueryStringMethod'] = NULL;
$arguments50['addQueryStringExclude'] = '';
$arguments50['absolute'] = false;
$arguments50['parts-as'] = 'typoLinkParts';
$arguments50['textWrap'] = '';
$arguments50['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link');
$arguments50['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');

$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
        ';
return $output49;
};
$arguments47 = [];

$output46 .= '';

$output46 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output58 = '';

$output58 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
$output78 = '';

$output78 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};
$arguments83 = [];
$arguments83['section'] = NULL;
$arguments83['partial'] = NULL;
$arguments83['delegate'] = NULL;
$arguments83['renderable'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['optional'] = false;
$arguments83['default'] = NULL;
$arguments83['contentAs'] = NULL;
$arguments83['debug'] = true;
$arguments83['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array85 = [];
$array85['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array85['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array85['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array85['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments83['arguments'] = $array85;

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
                    ';
return $output82;
};
$arguments79 = [];
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['aria'] = NULL;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['caption'] = NULL;
$arguments79['image'] = NULL;
$arguments79['crop'] = NULL;
$arguments79['cropVariant'] = 'default';
$arguments79['width'] = NULL;
$arguments79['height'] = NULL;
$arguments79['minWidth'] = NULL;
$arguments79['minHeight'] = NULL;
$arguments79['maxWidth'] = NULL;
$arguments79['maxHeight'] = NULL;
$arguments79['absolute'] = false;
$arguments79['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments79['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight');
$arguments79['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth');
$arguments79['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass');
$output81 = '';

$output81 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix');

$output81 .= '-';

$output81 .= $renderingContext->getVariableProvider()->getByPath('data.uid');
$arguments79['rel'] = $output81;
$arguments79['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');
$arguments79['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description');

$output78 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                ';
return $output78;
};
$arguments76 = [];

$output75 .= '';

$output75 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output88 = '';

$output88 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};
$arguments89 = [];
$arguments89['section'] = NULL;
$arguments89['partial'] = NULL;
$arguments89['delegate'] = NULL;
$arguments89['renderable'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['optional'] = false;
$arguments89['default'] = NULL;
$arguments89['contentAs'] = NULL;
$arguments89['debug'] = true;
$arguments89['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array91 = [];
$array91['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array91['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array91['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array91['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments89['arguments'] = $array91;

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                ';
return $output88;
};
$arguments86 = [];
$arguments86['if'] = NULL;

$output75 .= '';

$output75 .= '
            ';
return $output75;
};
$arguments59 = [];
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = [];
$array73['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom');

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};
$arguments66 = [];
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['debug'] = true;
$arguments66['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array68 = [];
$array68['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array68['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array68['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array68['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments66['arguments'] = $array68;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                    ';
return $output65;
};
$arguments62 = [];
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['aria'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['caption'] = NULL;
$arguments62['image'] = NULL;
$arguments62['crop'] = NULL;
$arguments62['cropVariant'] = 'default';
$arguments62['width'] = NULL;
$arguments62['height'] = NULL;
$arguments62['minWidth'] = NULL;
$arguments62['minHeight'] = NULL;
$arguments62['maxWidth'] = NULL;
$arguments62['maxHeight'] = NULL;
$arguments62['absolute'] = false;
$arguments62['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments62['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight');
$arguments62['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth');
$arguments62['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass');
$output64 = '';

$output64 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix');

$output64 .= '-';

$output64 .= $renderingContext->getVariableProvider()->getByPath('data.uid');
$arguments62['rel'] = $output64;
$arguments62['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');
$arguments62['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description');

$output61 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                ';
return $output61;
};
$arguments59['__elseClosures'][] = function() use ($renderingContext) {
$output69 = '';

$output69 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};
$arguments70 = [];
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['debug'] = true;
$arguments70['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array72 = [];
$array72['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array72['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array72['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array72['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments70['arguments'] = $array72;

$output69 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
                ';
return $output69;
};

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
        ';
return $output58;
};
$arguments56 = [];
$arguments56['if'] = NULL;

$output46 .= '';

$output46 .= '
    ';
return $output46;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = [];
$array44['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link');

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$arguments7 = [];
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array9 = [];
$array9['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array9['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array9['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array9['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments7['arguments'] = $array9;

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
            ';
return $output6;
};
$arguments4 = [];
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['language'] = NULL;
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['addQueryString'] = false;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['addQueryStringExclude'] = '';
$arguments4['absolute'] = false;
$arguments4['parts-as'] = 'typoLinkParts';
$arguments4['textWrap'] = '';
$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link');
$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};
$arguments35 = [];
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['debug'] = true;
$arguments35['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array37 = [];
$array37['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array37['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array37['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array37['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments35['arguments'] = $array37;

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                    ';
return $output34;
};
$arguments31 = [];
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['aria'] = NULL;
$arguments31['class'] = NULL;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['rel'] = NULL;
$arguments31['caption'] = NULL;
$arguments31['image'] = NULL;
$arguments31['crop'] = NULL;
$arguments31['cropVariant'] = 'default';
$arguments31['width'] = NULL;
$arguments31['height'] = NULL;
$arguments31['minWidth'] = NULL;
$arguments31['minHeight'] = NULL;
$arguments31['maxWidth'] = NULL;
$arguments31['maxHeight'] = NULL;
$arguments31['absolute'] = false;
$arguments31['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments31['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight');
$arguments31['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth');
$arguments31['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass');
$output33 = '';

$output33 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix');

$output33 .= '-';

$output33 .= $renderingContext->getVariableProvider()->getByPath('data.uid');
$arguments31['rel'] = $output33;
$arguments31['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');
$arguments31['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description');

$output30 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
                ';
return $output30;
};
$arguments28 = [];

$output27 .= '';

$output27 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};
$arguments41 = [];
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['debug'] = true;
$arguments41['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array43 = [];
$array43['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array43['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array43['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array43['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments41['arguments'] = $array43;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                ';
return $output40;
};
$arguments38 = [];
$arguments38['if'] = NULL;

$output27 .= '';

$output27 .= '
            ';
return $output27;
};
$arguments11 = [];
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = [];
$array25['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom');

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};
$arguments18 = [];
$arguments18['section'] = NULL;
$arguments18['partial'] = NULL;
$arguments18['delegate'] = NULL;
$arguments18['renderable'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$arguments18['default'] = NULL;
$arguments18['contentAs'] = NULL;
$arguments18['debug'] = true;
$arguments18['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array20 = [];
$array20['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array20['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array20['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array20['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments18['arguments'] = $array20;

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                    ';
return $output17;
};
$arguments14 = [];
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['aria'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['rel'] = NULL;
$arguments14['caption'] = NULL;
$arguments14['image'] = NULL;
$arguments14['crop'] = NULL;
$arguments14['cropVariant'] = 'default';
$arguments14['width'] = NULL;
$arguments14['height'] = NULL;
$arguments14['minWidth'] = NULL;
$arguments14['minHeight'] = NULL;
$arguments14['maxWidth'] = NULL;
$arguments14['maxHeight'] = NULL;
$arguments14['absolute'] = false;
$arguments14['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments14['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight');
$arguments14['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth');
$arguments14['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass');
$output16 = '';

$output16 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix');

$output16 .= '-';

$output16 .= $renderingContext->getVariableProvider()->getByPath('data.uid');
$arguments14['rel'] = $output16;
$arguments14['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title');
$arguments14['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description');

$output13 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
                ';
return $output13;
};
$arguments11['__elseClosures'][] = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};
$arguments22 = [];
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array24 = [];
$array24['file'] = $renderingContext->getVariableProvider()->getByPath('file');
$array24['data'] = $renderingContext->getVariableProvider()->getByPath('data');
$array24['settings'] = $renderingContext->getVariableProvider()->getByPath('settings');
$array24['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments22['arguments'] = $array24;

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                ';
return $output21;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
        ';
return $output10;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
$output96 = '';

$output96 .= '
        <figcaption class="caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description')]);
};
$arguments97 = [];
$arguments97['value'] = NULL;
$renderChildrenClosure98 = ($arguments97['value'] !== null) ? function() use ($arguments97) { return $arguments97['value']; } : $renderChildrenClosure98;
$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '</figcaption>
    ';
return $output96;
};
$arguments92 = [];
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = [];
$array94['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description');

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments92['__thenClosure'] = $renderChildrenClosure93;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#