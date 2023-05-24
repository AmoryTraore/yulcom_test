<?php

class layout_Default_html_5277b3de2d487a20ee1faa44c49d98fd55745b46 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
$arguments4 = [];
$arguments4['as'] = NULL;
$arguments4['variants'] = NULL;
$arguments4['multiplier'] = NULL;
$arguments4['gutters'] = NULL;
$arguments4['corrections'] = NULL;
$arguments4['aspectRatio'] = NULL;
$arguments4['as'] = 'variants';
$arguments4['variants'] = $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.variants');

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.backendlayout.{backendlayout}');
};
$arguments6 = [];
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'backendlayoutConfig';
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('backendlayoutConfig.{data.colPos}');
};
$arguments8 = [];
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'columnConfig';
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};
$arguments15 = [];
$arguments15['as'] = NULL;
$arguments15['variants'] = NULL;
$arguments15['multiplier'] = NULL;
$arguments15['gutters'] = NULL;
$arguments15['corrections'] = NULL;
$arguments15['aspectRatio'] = NULL;
$arguments15['as'] = 'variants';
$arguments15['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments15['multiplier'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier');
$arguments15['gutters'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters');
$arguments15['corrections'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections');

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output14 .= '
    ';
return $output14;
};
$arguments10 = [];
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = [];
$array12['0'] = $renderingContext->getVariableProvider()->getByPath('columnConfig');

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.container.{context.CType}');
};
$arguments25 = [];
$arguments25['value'] = NULL;
$arguments25['name'] = NULL;
$arguments25['name'] = 'containerConfig';
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('containerConfig.{data.colPos}');
};
$arguments27 = [];
$arguments27['value'] = NULL;
$arguments27['name'] = NULL;
$arguments27['name'] = 'containerColumnConfig';
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output24 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
$arguments34 = [];
$arguments34['as'] = NULL;
$arguments34['variants'] = NULL;
$arguments34['multiplier'] = NULL;
$arguments34['gutters'] = NULL;
$arguments34['corrections'] = NULL;
$arguments34['aspectRatio'] = NULL;
$arguments34['as'] = 'variants';
$arguments34['variants'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments34['multiplier'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.multiplier');
$arguments34['gutters'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.gutters');
$arguments34['corrections'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.corrections');

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '
            ';
return $output33;
};
$arguments29 = [];
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = [];
$array31['0'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig');

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output24 .= '
        ';
return $output24;
};
$arguments22 = [];
$arguments22['each'] = NULL;
$arguments22['as'] = NULL;
$arguments22['key'] = NULL;
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$arguments22['each'] = $renderingContext->getVariableProvider()->getByPath('containerContext');
$arguments22['as'] = 'context';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
    ';
return $output21;
};
$arguments17 = [];
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = [];
$array19['0'] = $renderingContext->getVariableProvider()->getByPath('containerContext');

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return 'frame-size-default';
};
$arguments36 = [];
$arguments36['value'] = NULL;
$arguments36['name'] = NULL;
$arguments36['name'] = 'frameSize';
$renderChildrenClosure37 = ($arguments36['value'] !== null) ? function() use ($arguments36) { return $arguments36['value']; } : $renderChildrenClosure37;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= 'frame-';

$output40 .= $renderingContext->getVariableProvider()->getByPath('data.frame_class');
return $output40;
};
$arguments38 = [];
$arguments38['value'] = NULL;
$arguments38['name'] = NULL;
$arguments38['name'] = 'frameClass';
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
$output43 = '';

$output43 .= 'frame-type-';

$output43 .= $renderingContext->getVariableProvider()->getByPath('data.CType');
return $output43;
};
$arguments41 = [];
$arguments41['value'] = NULL;
$arguments41['name'] = NULL;
$arguments41['name'] = 'typeClass';
$renderChildrenClosure42 = ($arguments41['value'] !== null) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
$output46 = '';

$output46 .= 'frame-layout-';

$output46 .= $renderingContext->getVariableProvider()->getByPath('data.frame_layout');
return $output46;
};
$arguments44 = [];
$arguments44['value'] = NULL;
$arguments44['name'] = NULL;
$arguments44['name'] = 'layoutClass';
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= 'frame-background-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['then'] = NULL;
$arguments50['else'] = NULL;
$arguments50['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = [];
$array52['0'] = $renderingContext->getVariableProvider()->getByPath('data.background_color_class');

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments50['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments50['else'] = 'none';
$arguments50['then'] = $renderingContext->getVariableProvider()->getByPath('data.background_color_class');

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
return $output49;
};
$arguments47 = [];
$arguments47['value'] = NULL;
$arguments47['name'] = NULL;
$arguments47['name'] = 'backgroundClass';
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= 'frame-space-before-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};
$arguments57 = [];
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = [];
$array59['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class');

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['else'] = 'none';
$arguments57['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class');

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
return $output56;
};
$arguments54 = [];
$arguments54['value'] = NULL;
$arguments54['name'] = NULL;
$arguments54['name'] = 'spaceBeforeClass';
$renderChildrenClosure55 = ($arguments54['value'] !== null) ? function() use ($arguments54) { return $arguments54['value']; } : $renderChildrenClosure55;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= 'frame-space-after-';
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
$array66['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class');

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['else'] = 'none';
$arguments64['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class');

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);
return $output63;
};
$arguments61 = [];
$arguments61['value'] = NULL;
$arguments61['name'] = NULL;
$arguments61['name'] = 'spaceAfterClass';
$renderChildrenClosure62 = ($arguments61['value'] !== null) ? function() use ($arguments61) { return $arguments61['value']; } : $renderChildrenClosure62;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
$output166 = '';

$output166 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
$output169 = '';

$output169 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return NULL;
};
$arguments172 = [];
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = [];
$array174['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0');

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['then'] = 'frame-has-backgroundimage';
$arguments172['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);
};
$arguments170 = [];
$arguments170['value'] = NULL;
$arguments170['name'] = NULL;
$arguments170['name'] = 'backgroundImageClass';
$renderChildrenClosure171 = ($arguments170['value'] !== null) ? function() use ($arguments170) { return $arguments170['value']; } : $renderChildrenClosure171;
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output169 .= '
            <div id="c';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output169 .= '" class="frame ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameSize')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('layoutClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output169 .= ' ';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output169 .= '">
                <div class="frame-group-container">
                    <div class="frame-group-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};
$arguments176 = [];
$arguments176['section'] = NULL;
$arguments176['partial'] = NULL;
$arguments176['delegate'] = NULL;
$arguments176['renderable'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['optional'] = false;
$arguments176['default'] = NULL;
$arguments176['contentAs'] = NULL;
$arguments176['debug'] = true;
$arguments176['partial'] = 'Frame/General/BackgroundImage';
$arguments176['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output169 .= '
                        <div class="frame-container frame-container-default">
                            <div class="frame-inner">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
$output182 = '';

$output182 .= '
                                    <a id="c';

$output182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output182 .= '"></a>
                                ';
return $output182;
};
$arguments178 = [];
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = [];
$array180['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID');

$expression181 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['__thenClosure'] = $renderChildrenClosure179;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
$output187 = '';

$output187 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext) {
return NULL;
};
$arguments188 = [];
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'DropIn/Before/All';
$arguments188['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                                ';
return $output187;
};
$arguments183 = [];
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['renderable'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['debug'] = true;
$arguments183['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array185 = [];
$array185['0'] = 'true';

$expression186 = function($context) {return TRUE;};
$arguments183['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
$output194 = '';

$output194 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure196 = function() use ($renderingContext) {
return NULL;
};
$arguments195 = [];
$arguments195['section'] = NULL;
$arguments195['partial'] = NULL;
$arguments195['delegate'] = NULL;
$arguments195['renderable'] = NULL;
$arguments195['arguments'] = array (
);
$arguments195['optional'] = false;
$arguments195['default'] = NULL;
$arguments195['contentAs'] = NULL;
$arguments195['debug'] = true;
$arguments195['partial'] = 'Header/All';
$arguments195['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output194 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
                                ';
return $output194;
};
$arguments190 = [];
$arguments190['section'] = NULL;
$arguments190['partial'] = NULL;
$arguments190['delegate'] = NULL;
$arguments190['renderable'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['optional'] = false;
$arguments190['default'] = NULL;
$arguments190['contentAs'] = NULL;
$arguments190['debug'] = true;
$arguments190['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array192 = [];
$array192['0'] = 'true';

$expression193 = function($context) {return TRUE;};
$arguments190['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure198 = function() use ($renderingContext) {
return NULL;
};
$arguments197 = [];
$arguments197['section'] = NULL;
$arguments197['partial'] = NULL;
$arguments197['delegate'] = NULL;
$arguments197['renderable'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['optional'] = false;
$arguments197['default'] = NULL;
$arguments197['contentAs'] = NULL;
$arguments197['debug'] = true;
$arguments197['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array199 = [];
$array199['0'] = 'true';

$expression200 = function($context) {return TRUE;};
$arguments197['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure202 = function() use ($renderingContext) {
$output205 = '';

$output205 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure207 = function() use ($renderingContext) {
return NULL;
};
$arguments206 = [];
$arguments206['section'] = NULL;
$arguments206['partial'] = NULL;
$arguments206['delegate'] = NULL;
$arguments206['renderable'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['optional'] = false;
$arguments206['default'] = NULL;
$arguments206['contentAs'] = NULL;
$arguments206['debug'] = true;
$arguments206['partial'] = 'Footer/All';
$arguments206['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
                                ';
return $output205;
};
$arguments201 = [];
$arguments201['section'] = NULL;
$arguments201['partial'] = NULL;
$arguments201['delegate'] = NULL;
$arguments201['renderable'] = NULL;
$arguments201['arguments'] = array (
);
$arguments201['optional'] = false;
$arguments201['default'] = NULL;
$arguments201['contentAs'] = NULL;
$arguments201['debug'] = true;
$arguments201['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array203 = [];
$array203['0'] = 'true';

$expression204 = function($context) {return TRUE;};
$arguments201['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output169 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure209 = function() use ($renderingContext) {
$output212 = '';

$output212 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure214 = function() use ($renderingContext) {
return NULL;
};
$arguments213 = [];
$arguments213['section'] = NULL;
$arguments213['partial'] = NULL;
$arguments213['delegate'] = NULL;
$arguments213['renderable'] = NULL;
$arguments213['arguments'] = array (
);
$arguments213['optional'] = false;
$arguments213['default'] = NULL;
$arguments213['contentAs'] = NULL;
$arguments213['debug'] = true;
$arguments213['partial'] = 'DropIn/After/All';
$arguments213['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output212 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output212 .= '
                                ';
return $output212;
};
$arguments208 = [];
$arguments208['section'] = NULL;
$arguments208['partial'] = NULL;
$arguments208['delegate'] = NULL;
$arguments208['renderable'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['optional'] = false;
$arguments208['default'] = NULL;
$arguments208['contentAs'] = NULL;
$arguments208['debug'] = true;
$arguments208['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array210 = [];
$array210['0'] = 'true';

$expression211 = function($context) {return TRUE;};
$arguments208['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression211(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);

$output169 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output169 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ';
return $output169;
};
$arguments167 = [];

$output166 .= '';

$output166 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure216 = function() use ($renderingContext) {
$output217 = '';

$output217 .= '

            <a id="c';

$output217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output217 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure219 = function() use ($renderingContext) {
$output222 = '';

$output222 .= '
                <a id="c';

$output222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output222 .= '"></a>
            ';
return $output222;
};
$arguments218 = [];
$arguments218['then'] = NULL;
$arguments218['else'] = NULL;
$arguments218['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array220 = [];
$array220['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID');

$expression221 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments218['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression221(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array220)
					),
					$renderingContext
				);
$arguments218['__thenClosure'] = $renderChildrenClosure219;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext) {
$output227 = '';

$output227 .= '
                <div class="';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output227 .= '"></div>
            ';
return $output227;
};
$arguments223 = [];
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = [];
$array225['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class');

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$arguments223['__thenClosure'] = $renderChildrenClosure224;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure229 = function() use ($renderingContext) {
$output232 = '';

$output232 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure234 = function() use ($renderingContext) {
return NULL;
};
$arguments233 = [];
$arguments233['section'] = NULL;
$arguments233['partial'] = NULL;
$arguments233['delegate'] = NULL;
$arguments233['renderable'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['optional'] = false;
$arguments233['default'] = NULL;
$arguments233['contentAs'] = NULL;
$arguments233['debug'] = true;
$arguments233['partial'] = 'DropIn/Before/All';
$arguments233['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output232 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
            ';
return $output232;
};
$arguments228 = [];
$arguments228['section'] = NULL;
$arguments228['partial'] = NULL;
$arguments228['delegate'] = NULL;
$arguments228['renderable'] = NULL;
$arguments228['arguments'] = array (
);
$arguments228['optional'] = false;
$arguments228['default'] = NULL;
$arguments228['contentAs'] = NULL;
$arguments228['debug'] = true;
$arguments228['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array230 = [];
$array230['0'] = 'true';

$expression231 = function($context) {return TRUE;};
$arguments228['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure236 = function() use ($renderingContext) {
$output239 = '';

$output239 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure241 = function() use ($renderingContext) {
return NULL;
};
$arguments240 = [];
$arguments240['section'] = NULL;
$arguments240['partial'] = NULL;
$arguments240['delegate'] = NULL;
$arguments240['renderable'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['optional'] = false;
$arguments240['default'] = NULL;
$arguments240['contentAs'] = NULL;
$arguments240['debug'] = true;
$arguments240['partial'] = 'Header/All';
$arguments240['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
            ';
return $output239;
};
$arguments235 = [];
$arguments235['section'] = NULL;
$arguments235['partial'] = NULL;
$arguments235['delegate'] = NULL;
$arguments235['renderable'] = NULL;
$arguments235['arguments'] = array (
);
$arguments235['optional'] = false;
$arguments235['default'] = NULL;
$arguments235['contentAs'] = NULL;
$arguments235['debug'] = true;
$arguments235['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array237 = [];
$array237['0'] = 'true';

$expression238 = function($context) {return TRUE;};
$arguments235['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext) {
return NULL;
};
$arguments242 = [];
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array244 = [];
$array244['0'] = 'true';

$expression245 = function($context) {return TRUE;};
$arguments242['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure247 = function() use ($renderingContext) {
$output250 = '';

$output250 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure252 = function() use ($renderingContext) {
return NULL;
};
$arguments251 = [];
$arguments251['section'] = NULL;
$arguments251['partial'] = NULL;
$arguments251['delegate'] = NULL;
$arguments251['renderable'] = NULL;
$arguments251['arguments'] = array (
);
$arguments251['optional'] = false;
$arguments251['default'] = NULL;
$arguments251['contentAs'] = NULL;
$arguments251['debug'] = true;
$arguments251['partial'] = 'Footer/All';
$arguments251['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output250 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output250 .= '
            ';
return $output250;
};
$arguments246 = [];
$arguments246['section'] = NULL;
$arguments246['partial'] = NULL;
$arguments246['delegate'] = NULL;
$arguments246['renderable'] = NULL;
$arguments246['arguments'] = array (
);
$arguments246['optional'] = false;
$arguments246['default'] = NULL;
$arguments246['contentAs'] = NULL;
$arguments246['debug'] = true;
$arguments246['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array248 = [];
$array248['0'] = 'true';

$expression249 = function($context) {return TRUE;};
$arguments246['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure254 = function() use ($renderingContext) {
$output257 = '';

$output257 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure259 = function() use ($renderingContext) {
return NULL;
};
$arguments258 = [];
$arguments258['section'] = NULL;
$arguments258['partial'] = NULL;
$arguments258['delegate'] = NULL;
$arguments258['renderable'] = NULL;
$arguments258['arguments'] = array (
);
$arguments258['optional'] = false;
$arguments258['default'] = NULL;
$arguments258['contentAs'] = NULL;
$arguments258['debug'] = true;
$arguments258['partial'] = 'DropIn/After/All';
$arguments258['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output257 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '
            ';
return $output257;
};
$arguments253 = [];
$arguments253['section'] = NULL;
$arguments253['partial'] = NULL;
$arguments253['delegate'] = NULL;
$arguments253['renderable'] = NULL;
$arguments253['arguments'] = array (
);
$arguments253['optional'] = false;
$arguments253['default'] = NULL;
$arguments253['contentAs'] = NULL;
$arguments253['debug'] = true;
$arguments253['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array255 = [];
$array255['0'] = 'true';

$expression256 = function($context) {return TRUE;};
$arguments253['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output217 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext) {
$output264 = '';

$output264 .= '
                <div class="';

$output264 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output264 .= '"></div>
            ';
return $output264;
};
$arguments260 = [];
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = [];
$array262['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class');

$expression263 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['__thenClosure'] = $renderChildrenClosure261;

$output217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output217 .= '

        ';
return $output217;
};
$arguments215 = [];
$arguments215['if'] = NULL;

$output166 .= '';

$output166 .= '
    ';
return $output166;
};
$arguments68 = [];
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = [];
$array164['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class');
$array164['1'] = ' != none';

$expression165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments68['__thenClosure'] = function() use ($renderingContext) {
$output70 = '';

$output70 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};
$arguments73 = [];
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = [];
$array75['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0');

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['then'] = 'frame-has-backgroundimage';
$arguments73['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
};
$arguments71 = [];
$arguments71['value'] = NULL;
$arguments71['name'] = NULL;
$arguments71['name'] = 'backgroundImageClass';
$renderChildrenClosure72 = ($arguments71['value'] !== null) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72;
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
            <div id="c';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output70 .= '" class="frame ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameSize')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('layoutClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output70 .= ' ';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output70 .= '">
                <div class="frame-group-container">
                    <div class="frame-group-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};
$arguments77 = [];
$arguments77['section'] = NULL;
$arguments77['partial'] = NULL;
$arguments77['delegate'] = NULL;
$arguments77['renderable'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['optional'] = false;
$arguments77['default'] = NULL;
$arguments77['contentAs'] = NULL;
$arguments77['debug'] = true;
$arguments77['partial'] = 'Frame/General/BackgroundImage';
$arguments77['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output70 .= '
                        <div class="frame-container frame-container-default">
                            <div class="frame-inner">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
$output83 = '';

$output83 .= '
                                    <a id="c';

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output83 .= '"></a>
                                ';
return $output83;
};
$arguments79 = [];
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = [];
$array81['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID');

$expression82 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output70 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
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
$arguments89['partial'] = 'DropIn/Before/All';
$arguments89['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                                ';
return $output88;
};
$arguments84 = [];
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['debug'] = true;
$arguments84['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array86 = [];
$array86['0'] = 'true';

$expression87 = function($context) {return TRUE;};
$arguments84['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression87(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output70 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
$output95 = '';

$output95 .= '
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
$arguments96['partial'] = 'Header/All';
$arguments96['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output95 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                                ';
return $output95;
};
$arguments91 = [];
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['debug'] = true;
$arguments91['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array93 = [];
$array93['0'] = 'true';

$expression94 = function($context) {return TRUE;};
$arguments91['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output70 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};
$arguments98 = [];
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array100 = [];
$array100['0'] = 'true';

$expression101 = function($context) {return TRUE;};
$arguments98['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output70 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
$output106 = '';

$output106 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};
$arguments107 = [];
$arguments107['section'] = NULL;
$arguments107['partial'] = NULL;
$arguments107['delegate'] = NULL;
$arguments107['renderable'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['optional'] = false;
$arguments107['default'] = NULL;
$arguments107['contentAs'] = NULL;
$arguments107['debug'] = true;
$arguments107['partial'] = 'Footer/All';
$arguments107['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                ';
return $output106;
};
$arguments102 = [];
$arguments102['section'] = NULL;
$arguments102['partial'] = NULL;
$arguments102['delegate'] = NULL;
$arguments102['renderable'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['optional'] = false;
$arguments102['default'] = NULL;
$arguments102['contentAs'] = NULL;
$arguments102['debug'] = true;
$arguments102['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array104 = [];
$array104['0'] = 'true';

$expression105 = function($context) {return TRUE;};
$arguments102['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output70 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};
$arguments114 = [];
$arguments114['section'] = NULL;
$arguments114['partial'] = NULL;
$arguments114['delegate'] = NULL;
$arguments114['renderable'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['optional'] = false;
$arguments114['default'] = NULL;
$arguments114['contentAs'] = NULL;
$arguments114['debug'] = true;
$arguments114['partial'] = 'DropIn/After/All';
$arguments114['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
                                ';
return $output113;
};
$arguments109 = [];
$arguments109['section'] = NULL;
$arguments109['partial'] = NULL;
$arguments109['delegate'] = NULL;
$arguments109['renderable'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['optional'] = false;
$arguments109['default'] = NULL;
$arguments109['contentAs'] = NULL;
$arguments109['debug'] = true;
$arguments109['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array111 = [];
$array111['0'] = 'true';

$expression112 = function($context) {return TRUE;};
$arguments109['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output70 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ';
return $output70;
};
$arguments68['__elseClosures'][] = function() use ($renderingContext) {
$output116 = '';

$output116 .= '

            <a id="c';

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output116 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
$output121 = '';

$output121 .= '
                <a id="c';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output121 .= '"></a>
            ';
return $output121;
};
$arguments117 = [];
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = [];
$array119['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID');

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['__thenClosure'] = $renderChildrenClosure118;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
$output126 = '';

$output126 .= '
                <div class="';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output126 .= '"></div>
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
$array124['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class');

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
$output131 = '';

$output131 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};
$arguments132 = [];
$arguments132['section'] = NULL;
$arguments132['partial'] = NULL;
$arguments132['delegate'] = NULL;
$arguments132['renderable'] = NULL;
$arguments132['arguments'] = array (
);
$arguments132['optional'] = false;
$arguments132['default'] = NULL;
$arguments132['contentAs'] = NULL;
$arguments132['debug'] = true;
$arguments132['partial'] = 'DropIn/Before/All';
$arguments132['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output131 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
            ';
return $output131;
};
$arguments127 = [];
$arguments127['section'] = NULL;
$arguments127['partial'] = NULL;
$arguments127['delegate'] = NULL;
$arguments127['renderable'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['optional'] = false;
$arguments127['default'] = NULL;
$arguments127['contentAs'] = NULL;
$arguments127['debug'] = true;
$arguments127['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array129 = [];
$array129['0'] = 'true';

$expression130 = function($context) {return TRUE;};
$arguments127['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
$output138 = '';

$output138 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};
$arguments139 = [];
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['debug'] = true;
$arguments139['partial'] = 'Header/All';
$arguments139['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
            ';
return $output138;
};
$arguments134 = [];
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['renderable'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['debug'] = true;
$arguments134['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array136 = [];
$array136['0'] = 'true';

$expression137 = function($context) {return TRUE;};
$arguments134['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};
$arguments141 = [];
$arguments141['section'] = NULL;
$arguments141['partial'] = NULL;
$arguments141['delegate'] = NULL;
$arguments141['renderable'] = NULL;
$arguments141['arguments'] = array (
);
$arguments141['optional'] = false;
$arguments141['default'] = NULL;
$arguments141['contentAs'] = NULL;
$arguments141['debug'] = true;
$arguments141['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array143 = [];
$array143['0'] = 'true';

$expression144 = function($context) {return TRUE;};
$arguments141['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
$output149 = '';

$output149 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};
$arguments150 = [];
$arguments150['section'] = NULL;
$arguments150['partial'] = NULL;
$arguments150['delegate'] = NULL;
$arguments150['renderable'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['optional'] = false;
$arguments150['default'] = NULL;
$arguments150['contentAs'] = NULL;
$arguments150['debug'] = true;
$arguments150['partial'] = 'Footer/All';
$arguments150['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
            ';
return $output149;
};
$arguments145 = [];
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['debug'] = true;
$arguments145['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array147 = [];
$array147['0'] = 'true';

$expression148 = function($context) {return TRUE;};
$arguments145['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure153 = function() use ($renderingContext) {
$output156 = '';

$output156 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};
$arguments157 = [];
$arguments157['section'] = NULL;
$arguments157['partial'] = NULL;
$arguments157['delegate'] = NULL;
$arguments157['renderable'] = NULL;
$arguments157['arguments'] = array (
);
$arguments157['optional'] = false;
$arguments157['default'] = NULL;
$arguments157['contentAs'] = NULL;
$arguments157['debug'] = true;
$arguments157['partial'] = 'DropIn/After/All';
$arguments157['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output156 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
            ';
return $output156;
};
$arguments152 = [];
$arguments152['section'] = NULL;
$arguments152['partial'] = NULL;
$arguments152['delegate'] = NULL;
$arguments152['renderable'] = NULL;
$arguments152['arguments'] = array (
);
$arguments152['optional'] = false;
$arguments152['default'] = NULL;
$arguments152['contentAs'] = NULL;
$arguments152['debug'] = true;
$arguments152['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array154 = [];
$array154['0'] = 'true';

$expression155 = function($context) {return TRUE;};
$arguments152['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output116 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                <div class="';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output163 .= '"></div>
            ';
return $output163;
};
$arguments159 = [];
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = [];
$array161['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class');

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output116 .= '

        ';
return $output116;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = [];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#