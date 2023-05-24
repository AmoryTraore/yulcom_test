<?php

class partial_DocHeader_5b646c9ac2c60cb6091e2f2d5e7169dc60d8e308 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
    <div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation row">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return 'module-docheader-bar-column-left col-12 text-end';
};
$arguments1 = [];
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'columnCssClass';
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-7 col-md-6 col-lg-8 text-end';
};
$arguments36 = [];
$arguments36['value'] = NULL;
$arguments36['name'] = NULL;
$arguments36['name'] = 'columnCssClass';
$renderChildrenClosure37 = ($arguments36['value'] !== null) ? function() use ($arguments36) { return $arguments36['value']; } : $renderChildrenClosure37;
$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output35 .= '
                    <div class="module-docheader-bar-column-left col-12 col-sm-5 col-md-6 col-lg-4">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                                <div class="form-group form-group-sm col">
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
$arguments41['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array43 = [];
$array43['menu'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments41['arguments'] = $array43;

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                                </div>
                            ';
return $output40;
};
$arguments38 = [];
$arguments38['each'] = NULL;
$arguments38['as'] = NULL;
$arguments38['key'] = NULL;
$arguments38['reverse'] = false;
$arguments38['iteration'] = NULL;
$arguments38['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
$arguments38['as'] = 'menu';

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '
                        </div>
                    </div>
                ';
return $output35;
};
$arguments33 = [];

$output32 .= '';

$output32 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-9 text-end';
};
$arguments47 = [];
$arguments47['value'] = NULL;
$arguments47['name'] = NULL;
$arguments47['name'] = 'columnCssClass';
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
                    <div class="module-docheader-bar-column-left col">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                                <div class="col">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['section'] = NULL;
$arguments52['partial'] = NULL;
$arguments52['delegate'] = NULL;
$arguments52['renderable'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['optional'] = false;
$arguments52['default'] = NULL;
$arguments52['contentAs'] = NULL;
$arguments52['debug'] = true;
$arguments52['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array54 = [];
$array54['menu'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments52['arguments'] = $array54;

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                                </div>
                            ';
return $output51;
};
$arguments49 = [];
$arguments49['each'] = NULL;
$arguments49['as'] = NULL;
$arguments49['key'] = NULL;
$arguments49['reverse'] = false;
$arguments49['iteration'] = NULL;
$arguments49['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
$arguments49['as'] = 'menu';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
                        </div>
                    </div>
                ';
return $output46;
};
$arguments44 = [];
$arguments44['if'] = NULL;

$output32 .= '';

$output32 .= '
            ';
return $output32;
};
$arguments8 = [];
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = [];
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
};
$arguments29 = [];
$arguments29['subject'] = NULL;
$renderChildrenClosure30 = ($arguments29['subject'] !== null) ? function() use ($arguments29) { return $arguments29['subject']; } : $renderChildrenClosure30;$array28['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);
$array28['1'] = ' > 1';

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-7 col-md-6 col-lg-8 text-end';
};
$arguments11 = [];
$arguments11['value'] = NULL;
$arguments11['name'] = NULL;
$arguments11['name'] = 'columnCssClass';
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '
                    <div class="module-docheader-bar-column-left col-12 col-sm-5 col-md-6 col-lg-4">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                                <div class="form-group form-group-sm col">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};
$arguments16 = [];
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array18 = [];
$array18['menu'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments16['arguments'] = $array18;

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                                </div>
                            ';
return $output15;
};
$arguments13 = [];
$arguments13['each'] = NULL;
$arguments13['as'] = NULL;
$arguments13['key'] = NULL;
$arguments13['reverse'] = false;
$arguments13['iteration'] = NULL;
$arguments13['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
$arguments13['as'] = 'menu';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output10 .= '
                        </div>
                    </div>
                ';
return $output10;
};
$arguments8['__elseClosures'][] = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-9 text-end';
};
$arguments20 = [];
$arguments20['value'] = NULL;
$arguments20['name'] = NULL;
$arguments20['name'] = 'columnCssClass';
$renderChildrenClosure21 = ($arguments20['value'] !== null) ? function() use ($arguments20) { return $arguments20['value']; } : $renderChildrenClosure21;
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '
                    <div class="module-docheader-bar-column-left col">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                                <div class="col">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};
$arguments25 = [];
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['debug'] = true;
$arguments25['partial'] = 'Menus/SelectBoxJumpMenu';
// Rendering Array
$array27 = [];
$array27['menu'] = $renderingContext->getVariableProvider()->getByPath('menu');
$arguments25['arguments'] = $array27;

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                                </div>
                            ';
return $output24;
};
$arguments22 = [];
$arguments22['each'] = NULL;
$arguments22['as'] = NULL;
$arguments22['key'] = NULL;
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$arguments22['each'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
$arguments22['as'] = 'menu';

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
                        </div>
                    </div>
                ';
return $output19;
};

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
        ';
return $output7;
};
$arguments3 = [];
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = [];
$array5['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.menus');

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
        <div class="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnCssClass')]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output59 = '';

$output59 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};
$arguments76 = [];
$arguments76['value'] = NULL;

$output75 .= isset($arguments76['value']) ? $arguments76['value'] : $renderChildrenClosure77();

$output75 .= '
                    ';
return $output75;
};
$arguments73 = [];

$output72 .= '';

$output72 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                        <span class="typo3-docheader-pagePath">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};
$arguments81 = [];
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};
$arguments83 = [];
$arguments83['value'] = NULL;

$output80 .= isset($arguments83['value']) ? $arguments83['value'] : $renderChildrenClosure84();

$output80 .= '
                        </span>
                    ';
return $output80;
};
$arguments78 = [];
$arguments78['if'] = NULL;

$output72 .= '';

$output72 .= '
                ';
return $output72;
};
$arguments60 = [];
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = [];
$array70['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.fileOrFolder');

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};
$arguments63 = [];
$arguments63['value'] = NULL;

$output62 .= isset($arguments63['value']) ? $arguments63['value'] : $renderChildrenClosure64();

$output62 .= '
                    ';
return $output62;
};
$arguments60['__elseClosures'][] = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                        <span class="typo3-docheader-pagePath">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};
$arguments66 = [];
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['languageKey'] = NULL;
$arguments66['alternativeLanguageKeys'] = NULL;
$arguments66['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};
$arguments68 = [];
$arguments68['value'] = NULL;

$output65 .= isset($arguments68['value']) ? $arguments68['value'] : $renderChildrenClosure69();

$output65 .= '
                        </span>
                    ';
return $output65;
};

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                <strong>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                        ';

$output87 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationIcon');

$output87 .= ' ';

$output87 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationTitle');

$output87 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
$output92 = '';

$output92 .= '[';

$output92 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid');

$output92 .= ']';
return $output92;
};
$arguments88 = [];
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = [];
$array90['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid');

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                    ';
return $output87;
};
$arguments85 = [];
$arguments85['value'] = NULL;

$output59 .= isset($arguments85['value']) ? $arguments85['value'] : $renderChildrenClosure86();

$output59 .= '
                </strong>
                ';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationAdditionalInfo')]);

$output59 .= '
            ';
return $output59;
};
$arguments55 = [];
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = [];
$array57['0'] = $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation');

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '
        </div>
    </div>
    <div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
        <div class="module-docheader-bar-column-left">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};
$arguments93 = [];
$arguments93['section'] = NULL;
$arguments93['partial'] = NULL;
$arguments93['delegate'] = NULL;
$arguments93['renderable'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['optional'] = false;
$arguments93['default'] = NULL;
$arguments93['contentAs'] = NULL;
$arguments93['debug'] = true;
$arguments93['partial'] = 'ButtonBar';
// Rendering Array
$array95 = [];
$array95['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.left');
$arguments93['arguments'] = $array95;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output0 .= '
        </div>
        <div class="module-docheader-bar-column-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};
$arguments96 = [];
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['debug'] = true;
$arguments96['partial'] = 'ButtonBar';
// Rendering Array
$array98 = [];
$array98['buttons'] = $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.right');
$arguments96['arguments'] = $array98;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output0 .= '
        </div>
    </div>
</div>
';

return $output0;
}


}
#