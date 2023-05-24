<?php

class partial_Media_Rendering_Image_f4b3245af92fbf641dd4c80d6b1a8ec1ab49527f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<picture>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string6 = '{variant.breakpoint as integer}';
$array7 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string6, $array7);
};
$arguments4 = [];
$arguments4['value'] = NULL;
$arguments4['name'] = NULL;
$arguments4['name'] = 'breakpoint';
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string10 = '{variant.width as integer}';
$array11 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string10, $array11);
};
$arguments8 = [];
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'width';
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
$arguments12 = [];
$arguments12['value'] = NULL;
$arguments12['name'] = NULL;
$arguments12['name'] = 'height';
$arguments12['value'] = '';
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string26 = '{variant.aspectRatio as float}';
$array27 = array (
  0 => '{variant.aspectRatio as float}',
  1 => '{variant.aspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string26, $array27);
};
$arguments24 = [];
$arguments24['value'] = NULL;
$arguments24['name'] = NULL;
$arguments24['name'] = 'aspectRatio';
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string30 = '{width / aspectRatio}';
$array31 = array (
  0 => '{width / aspectRatio}',
  1 => '{width / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string30, $array31);
};
$arguments28 = [];
$arguments28['value'] = NULL;
$arguments28['name'] = NULL;
$arguments28['name'] = 'height';
$renderChildrenClosure29 = ($arguments28['value'] !== null) ? function() use ($arguments28) { return $arguments28['value']; } : $renderChildrenClosure29;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output23 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string34 = '{height as integer}';
$array35 = array (
  0 => '{height as integer}',
  1 => '{height as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string34, $array35);
};
$arguments32 = [];
$arguments32['value'] = NULL;
$arguments32['name'] = NULL;
$arguments32['name'] = 'height';
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output23 .= '
            ';
return $output23;
};
$arguments19 = [];
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = [];
$array21['0'] = $renderingContext->getVariableProvider()->getByPath('variant.aspectRatio');

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};
$arguments38 = [];
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = [];
$array40['0'] = $renderingContext->getVariableProvider()->getByPath('breakpoint');

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$output42 = '';

$output42 .= 'media="(min-width: ';

$output42 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output42 .= 'px)"';
$arguments38['then'] = $output42;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
};
$arguments36 = [];
$arguments36['value'] = NULL;
$arguments36['name'] = NULL;
$arguments36['name'] = 'mediaQuery';
$renderChildrenClosure37 = ($arguments36['value'] !== null) ? function() use ($arguments36) { return $arguments36['value']; } : $renderChildrenClosure37;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output18 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};
$arguments48 = [];
$arguments48['value'] = NULL;
$arguments48['name'] = NULL;
$arguments48['name'] = 'srcset';
$arguments48['value'] = '';
$renderChildrenClosure49 = ($arguments48['value'] !== null) ? function() use ($arguments48) { return $arguments48['value']; } : $renderChildrenClosure49;
$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string55 = '{sizeConfig.multiplier as float}';
$array56 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string55, $array56);
};
$arguments53 = [];
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'sizeWidth';
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string59 = '{sizeWidth * width}';
$array60 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string59, $array60);
};
$arguments57 = [];
$arguments57['value'] = NULL;
$arguments57['name'] = NULL;
$arguments57['name'] = 'sizeWidth';
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};
$arguments61 = [];
$arguments61['value'] = NULL;
$arguments61['name'] = NULL;
$arguments61['name'] = 'sizeHeight';
$arguments61['value'] = '';
$renderChildrenClosure62 = ($arguments61['value'] !== null) ? function() use ($arguments61) { return $arguments61['value']; } : $renderChildrenClosure62;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
$output90 = '';

$output90 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string93 = '{sizeConfig.multiplier as float}';
$array94 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string93, $array94);
};
$arguments91 = [];
$arguments91['value'] = NULL;
$arguments91['name'] = NULL;
$arguments91['name'] = 'sizeHeight';
$renderChildrenClosure92 = ($arguments91['value'] !== null) ? function() use ($arguments91) { return $arguments91['value']; } : $renderChildrenClosure92;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string97 = '{sizeHeight * height}';
$array98 = array (
  0 => '{sizeHeight * height}',
  1 => '{sizeHeight * height}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string97, $array98);
};
$arguments95 = [];
$arguments95['value'] = NULL;
$arguments95['name'] = NULL;
$arguments95['name'] = 'sizeHeight';
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output90 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};
$arguments101 = [];
$arguments101['src'] = '';
$arguments101['treatIdAsReference'] = false;
$arguments101['image'] = NULL;
$arguments101['crop'] = NULL;
$arguments101['cropVariant'] = 'default';
$arguments101['fileExtension'] = NULL;
$arguments101['width'] = NULL;
$arguments101['height'] = NULL;
$arguments101['minWidth'] = NULL;
$arguments101['minHeight'] = NULL;
$arguments101['maxWidth'] = NULL;
$arguments101['maxHeight'] = NULL;
$arguments101['absolute'] = false;
$arguments101['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments101['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name');
$output103 = '';

$output103 .= $renderingContext->getVariableProvider()->getByPath('sizeWidth');

$output103 .= 'c';
$arguments101['width'] = $output103;
$output104 = '';

$output104 .= $renderingContext->getVariableProvider()->getByPath('sizeHeight');

$output104 .= 'c';
$arguments101['height'] = $output104;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
};
$arguments99 = [];
$arguments99['value'] = NULL;
$arguments99['name'] = NULL;
$arguments99['name'] = 'sizeUrl';
$renderChildrenClosure100 = ($arguments99['value'] !== null) ? function() use ($arguments99) { return $arguments99['value']; } : $renderChildrenClosure100;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output90 .= '
                        ';
return $output90;
};
$arguments88 = [];

$output87 .= '';

$output87 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
$output107 = '';

$output107 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};
$arguments110 = [];
$arguments110['src'] = '';
$arguments110['treatIdAsReference'] = false;
$arguments110['image'] = NULL;
$arguments110['crop'] = NULL;
$arguments110['cropVariant'] = 'default';
$arguments110['fileExtension'] = NULL;
$arguments110['width'] = NULL;
$arguments110['height'] = NULL;
$arguments110['minWidth'] = NULL;
$arguments110['minHeight'] = NULL;
$arguments110['maxWidth'] = NULL;
$arguments110['maxHeight'] = NULL;
$arguments110['absolute'] = false;
$arguments110['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments110['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name');
$arguments110['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth');
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);
};
$arguments108 = [];
$arguments108['value'] = NULL;
$arguments108['name'] = NULL;
$arguments108['name'] = 'sizeUrl';
$renderChildrenClosure109 = ($arguments108['value'] !== null) ? function() use ($arguments108) { return $arguments108['value']; } : $renderChildrenClosure109;
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '
                        ';
return $output107;
};
$arguments105 = [];
$arguments105['if'] = NULL;

$output87 .= '';

$output87 .= '
                    ';
return $output87;
};
$arguments63 = [];
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array85 = [];
$array85['0'] = $renderingContext->getVariableProvider()->getByPath('height');

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string68 = '{sizeConfig.multiplier as float}';
$array69 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string68, $array69);
};
$arguments66 = [];
$arguments66['value'] = NULL;
$arguments66['name'] = NULL;
$arguments66['name'] = 'sizeHeight';
$renderChildrenClosure67 = ($arguments66['value'] !== null) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string72 = '{sizeHeight * height}';
$array73 = array (
  0 => '{sizeHeight * height}',
  1 => '{sizeHeight * height}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string72, $array73);
};
$arguments70 = [];
$arguments70['value'] = NULL;
$arguments70['name'] = NULL;
$arguments70['name'] = 'sizeHeight';
$renderChildrenClosure71 = ($arguments70['value'] !== null) ? function() use ($arguments70) { return $arguments70['value']; } : $renderChildrenClosure71;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output65 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};
$arguments76 = [];
$arguments76['src'] = '';
$arguments76['treatIdAsReference'] = false;
$arguments76['image'] = NULL;
$arguments76['crop'] = NULL;
$arguments76['cropVariant'] = 'default';
$arguments76['fileExtension'] = NULL;
$arguments76['width'] = NULL;
$arguments76['height'] = NULL;
$arguments76['minWidth'] = NULL;
$arguments76['minHeight'] = NULL;
$arguments76['maxWidth'] = NULL;
$arguments76['maxHeight'] = NULL;
$arguments76['absolute'] = false;
$arguments76['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments76['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name');
$output78 = '';

$output78 .= $renderingContext->getVariableProvider()->getByPath('sizeWidth');

$output78 .= 'c';
$arguments76['width'] = $output78;
$output79 = '';

$output79 .= $renderingContext->getVariableProvider()->getByPath('sizeHeight');

$output79 .= 'c';
$arguments76['height'] = $output79;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
};
$arguments74 = [];
$arguments74['value'] = NULL;
$arguments74['name'] = NULL;
$arguments74['name'] = 'sizeUrl';
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output65 .= '
                        ';
return $output65;
};
$arguments63['__elseClosures'][] = function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};
$arguments83 = [];
$arguments83['src'] = '';
$arguments83['treatIdAsReference'] = false;
$arguments83['image'] = NULL;
$arguments83['crop'] = NULL;
$arguments83['cropVariant'] = 'default';
$arguments83['fileExtension'] = NULL;
$arguments83['width'] = NULL;
$arguments83['height'] = NULL;
$arguments83['minWidth'] = NULL;
$arguments83['minHeight'] = NULL;
$arguments83['maxWidth'] = NULL;
$arguments83['maxHeight'] = NULL;
$arguments83['absolute'] = false;
$arguments83['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments83['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name');
$arguments83['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth');
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
};
$arguments81 = [];
$arguments81['value'] = NULL;
$arguments81['name'] = NULL;
$arguments81['name'] = 'sizeUrl';
$renderChildrenClosure82 = ($arguments81['value'] !== null) ? function() use ($arguments81) { return $arguments81['value']; } : $renderChildrenClosure82;
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output80 .= '
                        ';
return $output80;
};

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output52 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
$output114 = '';

$output114 .= $renderingContext->getVariableProvider()->getByPath('srcset');

$output114 .= $renderingContext->getVariableProvider()->getByPath('sizeUrl');

$output114 .= ' ';

$output114 .= $renderingContext->getVariableProvider()->getByPath('sizeKey');
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
$array117['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isLast');

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression118(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
$arguments115['else'] = ',';
$arguments115['__thenClosure'] = $renderChildrenClosure116;

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);
return $output114;
};
$arguments112 = [];
$arguments112['value'] = NULL;
$arguments112['name'] = NULL;
$arguments112['name'] = 'srcset';
$renderChildrenClosure113 = ($arguments112['value'] !== null) ? function() use ($arguments112) { return $arguments112['value']; } : $renderChildrenClosure113;
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output52 .= '
                ';
return $output52;
};
$arguments50 = [];
$arguments50['each'] = NULL;
$arguments50['as'] = NULL;
$arguments50['key'] = NULL;
$arguments50['reverse'] = false;
$arguments50['iteration'] = NULL;
$arguments50['each'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes');
$arguments50['key'] = 'sizeKey';
$arguments50['as'] = 'sizeConfig';
$arguments50['iteration'] = 'iteration';

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output47 .= '
            ';
return $output47;
};
$arguments43 = [];
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = [];
$array45['0'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes');

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['__thenClosure'] = $renderChildrenClosure44;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output18 .= '
            <source data-variant="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name')]);

$output18 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};
$arguments119 = [];
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = [];
$array121['0'] = $renderingContext->getVariableProvider()->getByPath('sizeHeight');

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$output123 = '';

$output123 .= 'data-width="';

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width')]);

$output123 .= '" data-height="';

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizeHeight')]);

$output123 .= '"';
$arguments119['then'] = $output123;
$output124 = '';

$output124 .= 'data-maxwidth="';

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width')]);

$output124 .= '"';
$arguments119['else'] = $output124;

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output18 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaQuery');
};
$arguments125 = [];
$arguments125['value'] = NULL;

$output18 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output18 .= ' srcset="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('srcset')]);

$output18 .= '">
        ';
return $output18;
};
$arguments14 = [];
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = [];
$array16['0'] = $renderingContext->getVariableProvider()->getByPath('width');

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = $renderChildrenClosure15;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1 = [];
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments1['key'] = 'name';
$arguments1['as'] = 'variant';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};
$arguments127 = [];
$arguments127['value'] = NULL;
$arguments127['name'] = NULL;
$arguments127['name'] = 'defaultWidth';
$arguments127['value'] = $renderingContext->getVariableProvider()->getByPath('variants.default.width');
$renderChildrenClosure128 = ($arguments127['value'] !== null) ? function() use ($arguments127) { return $arguments127['value']; } : $renderChildrenClosure128;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};
$arguments129 = [];
$arguments129['value'] = NULL;
$arguments129['name'] = NULL;
$arguments129['name'] = 'defaultAspectRatio';
$arguments129['value'] = $renderingContext->getVariableProvider()->getByPath('variants.default.aspectRatio');
$renderChildrenClosure130 = ($arguments129['value'] !== null) ? function() use ($arguments129) { return $arguments129['value']; } : $renderChildrenClosure130;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
$output135 = '';

$output135 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string138 = '{defaultAspectRatio as float}';
$array139 = array (
  0 => '{defaultAspectRatio as float}',
  1 => '{defaultAspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string138, $array139);
};
$arguments136 = [];
$arguments136['value'] = NULL;
$arguments136['name'] = NULL;
$arguments136['name'] = 'aspectRatio';
$renderChildrenClosure137 = ($arguments136['value'] !== null) ? function() use ($arguments136) { return $arguments136['value']; } : $renderChildrenClosure137;
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext)]);

$output135 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string142 = '{defaultWidth / aspectRatio}';
$array143 = array (
  0 => '{defaultWidth / aspectRatio}',
  1 => '{defaultWidth / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string142, $array143);
};
$arguments140 = [];
$arguments140['value'] = NULL;
$arguments140['name'] = NULL;
$arguments140['name'] = 'defaultHeight';
$renderChildrenClosure141 = ($arguments140['value'] !== null) ? function() use ($arguments140) { return $arguments140['value']; } : $renderChildrenClosure141;
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext)]);

$output135 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure145 = function() use ($renderingContext) {
$output146 = '';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string147 = '{defaultHeight as integer}';
$array148 = array (
  0 => '{defaultHeight as integer}',
  1 => '{defaultHeight as integer}',
);

$output146 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string147, $array148);

$output146 .= 'c';
return $output146;
};
$arguments144 = [];
$arguments144['value'] = NULL;
$arguments144['name'] = NULL;
$arguments144['name'] = 'defaultHeight';
$renderChildrenClosure145 = ($arguments144['value'] !== null) ? function() use ($arguments144) { return $arguments144['value']; } : $renderChildrenClosure145;
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output135 .= '
    ';
return $output135;
};
$arguments131 = [];
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = [];
$array133['0'] = $renderingContext->getVariableProvider()->getByPath('defaultAspectRatio');

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
$output163 = '';

$output163 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure165 = function() use ($renderingContext) {
$output166 = '';

$output166 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
return NULL;
};
$arguments167 = [];
$arguments167['value'] = NULL;
$arguments167['name'] = NULL;
$arguments167['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure170 = function() use ($renderingContext) {
return NULL;
};
$arguments169 = [];
$arguments169['src'] = '';
$arguments169['treatIdAsReference'] = false;
$arguments169['image'] = NULL;
$arguments169['crop'] = NULL;
$arguments169['cropVariant'] = 'default';
$arguments169['fileExtension'] = NULL;
$arguments169['width'] = NULL;
$arguments169['height'] = NULL;
$arguments169['minWidth'] = NULL;
$arguments169['minHeight'] = NULL;
$arguments169['maxWidth'] = NULL;
$arguments169['maxHeight'] = NULL;
$arguments169['absolute'] = false;
$arguments169['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments169['cropVariant'] = 'default';
$arguments169['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth');
$arguments169['height'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight');
$arguments167['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);
$renderChildrenClosure168 = ($arguments167['value'] !== null) ? function() use ($arguments167) { return $arguments167['value']; } : $renderChildrenClosure168;
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '
        ';
return $output166;
};
$arguments164 = [];

$output163 .= '';

$output163 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure172 = function() use ($renderingContext) {
$output173 = '';

$output173 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};
$arguments174 = [];
$arguments174['value'] = NULL;
$arguments174['name'] = NULL;
$arguments174['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};
$arguments176 = [];
$arguments176['src'] = '';
$arguments176['treatIdAsReference'] = false;
$arguments176['image'] = NULL;
$arguments176['crop'] = NULL;
$arguments176['cropVariant'] = 'default';
$arguments176['fileExtension'] = NULL;
$arguments176['width'] = NULL;
$arguments176['height'] = NULL;
$arguments176['minWidth'] = NULL;
$arguments176['minHeight'] = NULL;
$arguments176['maxWidth'] = NULL;
$arguments176['maxHeight'] = NULL;
$arguments176['absolute'] = false;
$arguments176['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments176['cropVariant'] = 'default';
$arguments176['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth');
$arguments174['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
$renderChildrenClosure175 = ($arguments174['value'] !== null) ? function() use ($arguments174) { return $arguments174['value']; } : $renderChildrenClosure175;
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output173 .= '
        ';
return $output173;
};
$arguments171 = [];
$arguments171['if'] = NULL;

$output163 .= '';

$output163 .= '
    ';
return $output163;
};
$arguments149 = [];
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = [];
$array161['0'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight');

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments149['__thenClosure'] = function() use ($renderingContext) {
$output151 = '';

$output151 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure153 = function() use ($renderingContext) {
return NULL;
};
$arguments152 = [];
$arguments152['value'] = NULL;
$arguments152['name'] = NULL;
$arguments152['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure155 = function() use ($renderingContext) {
return NULL;
};
$arguments154 = [];
$arguments154['src'] = '';
$arguments154['treatIdAsReference'] = false;
$arguments154['image'] = NULL;
$arguments154['crop'] = NULL;
$arguments154['cropVariant'] = 'default';
$arguments154['fileExtension'] = NULL;
$arguments154['width'] = NULL;
$arguments154['height'] = NULL;
$arguments154['minWidth'] = NULL;
$arguments154['minHeight'] = NULL;
$arguments154['maxWidth'] = NULL;
$arguments154['maxHeight'] = NULL;
$arguments154['absolute'] = false;
$arguments154['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments154['cropVariant'] = 'default';
$arguments154['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth');
$arguments154['height'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight');
$arguments152['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);
$renderChildrenClosure153 = ($arguments152['value'] !== null) ? function() use ($arguments152) { return $arguments152['value']; } : $renderChildrenClosure153;
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output151 .= '
        ';
return $output151;
};
$arguments149['__elseClosures'][] = function() use ($renderingContext) {
$output156 = '';

$output156 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};
$arguments157 = [];
$arguments157['value'] = NULL;
$arguments157['name'] = NULL;
$arguments157['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
return NULL;
};
$arguments159 = [];
$arguments159['src'] = '';
$arguments159['treatIdAsReference'] = false;
$arguments159['image'] = NULL;
$arguments159['crop'] = NULL;
$arguments159['cropVariant'] = 'default';
$arguments159['fileExtension'] = NULL;
$arguments159['width'] = NULL;
$arguments159['height'] = NULL;
$arguments159['minWidth'] = NULL;
$arguments159['minHeight'] = NULL;
$arguments159['maxWidth'] = NULL;
$arguments159['maxHeight'] = NULL;
$arguments159['absolute'] = false;
$arguments159['image'] = $renderingContext->getVariableProvider()->getByPath('file');
$arguments159['cropVariant'] = 'default';
$arguments159['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth');
$arguments157['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);
$renderChildrenClosure158 = ($arguments157['value'] !== null) ? function() use ($arguments157) { return $arguments157['value']; } : $renderChildrenClosure158;
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output156 .= '
        ';
return $output156;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
return NULL;
};
$arguments178 = [];
$arguments178['value'] = NULL;
$arguments178['name'] = NULL;
$arguments178['name'] = 'finalWidth';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure181 = function() use ($renderingContext) {
return NULL;
};
$arguments180 = [];
$arguments180['src'] = NULL;
$arguments180['property'] = NULL;
$arguments180['src'] = $renderingContext->getVariableProvider()->getByPath('src');
$arguments180['property'] = 'width';
$arguments178['value'] = BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
$renderChildrenClosure179 = ($arguments178['value'] !== null) ? function() use ($arguments178) { return $arguments178['value']; } : $renderChildrenClosure179;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure183 = function() use ($renderingContext) {
return NULL;
};
$arguments182 = [];
$arguments182['value'] = NULL;
$arguments182['name'] = NULL;
$arguments182['name'] = 'finalHeight';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure185 = function() use ($renderingContext) {
return NULL;
};
$arguments184 = [];
$arguments184['src'] = NULL;
$arguments184['property'] = NULL;
$arguments184['src'] = $renderingContext->getVariableProvider()->getByPath('src');
$arguments184['property'] = 'height';
$arguments182['value'] = BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
$renderChildrenClosure183 = ($arguments182['value'] !== null) ? function() use ($arguments182) { return $arguments182['value']; } : $renderChildrenClosure183;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);

$output0 .= '
    <img loading="lazy" src="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('src')]);

$output0 .= '" width="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth')]);

$output0 .= '" height="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight')]);

$output0 .= '" intrinsicsize="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth')]);

$output0 .= 'x';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight')]);

$output0 .= '" title="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title')]);

$output0 .= '" alt="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.alternative')]);

$output0 .= '">
</picture>

';

return $output0;
}


}
#