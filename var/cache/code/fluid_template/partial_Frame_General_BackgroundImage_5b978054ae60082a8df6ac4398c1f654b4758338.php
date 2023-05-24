<?php

class partial_Frame_General_BackgroundImage_5b978054ae60082a8df6ac4398c1f654b4758338 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
$arguments6 = [];
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'backgroundImageObject';
$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0');
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
$arguments8 = [];
$arguments8['value'] = NULL;
$arguments8['name'] = NULL;
$arguments8['name'] = 'backgroundImageIdentifier';
$output10 = '';

$output10 .= 'frame-backgroundimage-';

$output10 .= $renderingContext->getVariableProvider()->getByPath('data.uid');
$arguments8['value'] = $output10;
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return 'frame-backgroundimage';
};
$arguments11 = [];
$arguments11['value'] = NULL;
$arguments11['name'] = NULL;
$arguments11['name'] = 'backgroundImageClasses';
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output19 .= ' frame-backgroundimage-parallax';
return $output19;
};
$arguments17 = [];
$arguments17['value'] = NULL;
$arguments17['name'] = NULL;
$arguments17['name'] = 'backgroundImageClasses';
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);
};
$arguments13 = [];
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = [];
$array15['0'] = $renderingContext->getVariableProvider()->getByPath('data.background_image_options.parallax');

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
$output26 = '';

$output26 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output26 .= ' frame-backgroundimage-fade';
return $output26;
};
$arguments24 = [];
$arguments24['value'] = NULL;
$arguments24['name'] = NULL;
$arguments24['name'] = 'backgroundImageClasses';
$renderChildrenClosure25 = ($arguments24['value'] !== null) ? function() use ($arguments24) { return $arguments24['value']; } : $renderChildrenClosure25;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);
};
$arguments20 = [];
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array22 = [];
$array22['0'] = $renderingContext->getVariableProvider()->getByPath('data.background_image_options.fade');

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = $renderChildrenClosure21;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output5 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output33 .= ' frame-backgroundimage-';

$output33 .= $renderingContext->getVariableProvider()->getByPath('data.background_image_options.filter');
return $output33;
};
$arguments31 = [];
$arguments31['value'] = NULL;
$arguments31['name'] = NULL;
$arguments31['name'] = 'backgroundImageClasses';
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);
};
$arguments27 = [];
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = [];
$array29['0'] = $renderingContext->getVariableProvider()->getByPath('data.background_image_options.filter');

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = $renderChildrenClosure28;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output5 .= '
    <div class="frame-backgroundimage-container">
        <div id="';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier')]);

$output5 .= '" class="';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClasses')]);

$output5 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};
$arguments34 = [];
$arguments34['value'] = NULL;
$arguments34['name'] = NULL;
$arguments34['name'] = 'styles';
$arguments34['value'] = '';
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output5 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string41 = '{variant.breakpoint as integer}';
$array42 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string41, $array42);
};
$arguments39 = [];
$arguments39['value'] = NULL;
$arguments39['name'] = NULL;
$arguments39['name'] = 'breakpoint';
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string45 = '{variant.width as integer}';
$array46 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string45, $array46);
};
$arguments43 = [];
$arguments43['value'] = NULL;
$arguments43['name'] = NULL;
$arguments43['name'] = 'width';
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['value'] = NULL;
$arguments52['name'] = NULL;
$arguments52['name'] = 'variantStyle';
$arguments52['value'] = '';
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string59 = '{sizeConfig.multiplier as float}';
$array60 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string59, $array60);
};
$arguments57 = [];
$arguments57['value'] = NULL;
$arguments57['name'] = NULL;
$arguments57['name'] = 'sizeWidth';
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string63 = '{sizeWidth * width}';
$array64 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string63, $array64);
};
$arguments61 = [];
$arguments61['value'] = NULL;
$arguments61['name'] = NULL;
$arguments61['name'] = 'sizeWidth';
$renderChildrenClosure62 = ($arguments61['value'] !== null) ? function() use ($arguments61) { return $arguments61['value']; } : $renderChildrenClosure62;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string67 = '{sizeKey as float}';
$array68 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string67, $array68);
};
$arguments65 = [];
$arguments65['value'] = NULL;
$arguments65['name'] = NULL;
$arguments65['name'] = 'sizeDppx';
$renderChildrenClosure66 = ($arguments65['value'] !== null) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output75 = '';

$output75 .= '(min-width: ';

$output75 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output75 .= 'px)';
return $output75;
};
$arguments71 = [];
$arguments71['then'] = NULL;
$arguments71['else'] = NULL;
$arguments71['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = [];
$array73['0'] = $renderingContext->getVariableProvider()->getByPath('breakpoint');

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments71['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['__thenClosure'] = $renderChildrenClosure72;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);
};
$arguments69 = [];
$arguments69['value'] = NULL;
$arguments69['name'] = NULL;
$arguments69['name'] = 'mediaBreakpoint';
$renderChildrenClosure70 = ($arguments69['value'] !== null) ? function() use ($arguments69) { return $arguments69['value']; } : $renderChildrenClosure70;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};
$arguments76 = [];
$arguments76['value'] = NULL;
$arguments76['name'] = NULL;
$arguments76['name'] = 'mediaQuery';
$arguments76['value'] = '';
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
};
$arguments83 = [];
$arguments83['value'] = NULL;
$arguments83['name'] = NULL;
$arguments83['name'] = 'mediaQuery';
$renderChildrenClosure84 = ($arguments83['value'] !== null) ? function() use ($arguments83) { return $arguments83['value']; } : $renderChildrenClosure84;
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output82 .= '
                        ';
return $output82;
};
$arguments78 = [];
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = [];
$array80['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
$output89 = '';

$output89 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output92 = '';

$output92 .= '(-webkit-min-device-pixel-ratio: ';

$output92 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output92 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
$output97 = '';

$output97 .= ' and ';

$output97 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output97;
};
$arguments93 = [];
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = [];
$array95['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output92 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
return $output92;
};
$arguments90 = [];
$arguments90['value'] = NULL;
$arguments90['name'] = NULL;
$arguments90['name'] = 'mediaQuery';
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
$output100 = '';

$output100 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output100 .= ', (min-resolution: ';

$output100 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output100 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
$output105 = '';

$output105 .= ' and ';

$output105 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output105;
};
$arguments101 = [];
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = [];
$array103['0'] = $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['__thenClosure'] = $renderChildrenClosure102;

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);
return $output100;
};
$arguments98 = [];
$arguments98['value'] = NULL;
$arguments98['name'] = NULL;
$arguments98['name'] = 'mediaQuery';
$renderChildrenClosure99 = ($arguments98['value'] !== null) ? function() use ($arguments98) { return $arguments98['value']; } : $renderChildrenClosure99;
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output89 .= '
                        ';
return $output89;
};
$arguments85 = [];
$arguments85['then'] = NULL;
$arguments85['else'] = NULL;
$arguments85['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array87 = [];
$array87['0'] = $renderingContext->getVariableProvider()->getByPath('sizeDppx');
$array87['1'] = ' > 1';

$expression88 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments85['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
$arguments85['__thenClosure'] = $renderChildrenClosure86;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output56 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
$output108 = '';

$output108 .= $renderingContext->getVariableProvider()->getByPath('variantStyle');

$output108 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
$output113 = '';

$output113 .= '@media ';

$output113 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output113 .= ' { ';
return $output113;
};
$arguments109 = [];
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = [];
$array111['0'] = $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
$arguments109['__thenClosure'] = $renderChildrenClosure110;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '#';

$output108 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier');

$output108 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};
$arguments114 = [];
$arguments114['src'] = '';
$arguments114['treatIdAsReference'] = false;
$arguments114['image'] = NULL;
$arguments114['crop'] = NULL;
$arguments114['cropVariant'] = 'default';
$arguments114['fileExtension'] = NULL;
$arguments114['width'] = NULL;
$arguments114['height'] = NULL;
$arguments114['minWidth'] = NULL;
$arguments114['minHeight'] = NULL;
$arguments114['maxWidth'] = NULL;
$arguments114['maxHeight'] = NULL;
$arguments114['absolute'] = false;
$arguments114['image'] = $renderingContext->getVariableProvider()->getByPath('backgroundImageObject');
$arguments114['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name');
$arguments114['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth');

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output108 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return ' }';
};
$arguments116 = [];
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = [];
$array118['0'] = $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
return $output108;
};
$arguments106 = [];
$arguments106['value'] = NULL;
$arguments106['name'] = NULL;
$arguments106['name'] = 'variantStyle';
$renderChildrenClosure107 = ($arguments106['value'] !== null) ? function() use ($arguments106) { return $arguments106['value']; } : $renderChildrenClosure107;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output56 .= '
                    ';
return $output56;
};
$arguments54 = [];
$arguments54['each'] = NULL;
$arguments54['as'] = NULL;
$arguments54['key'] = NULL;
$arguments54['reverse'] = false;
$arguments54['iteration'] = NULL;
$arguments54['each'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes');
$arguments54['key'] = 'sizeKey';
$arguments54['as'] = 'sizeConfig';
$arguments54['iteration'] = 'iteration';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output51 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return NULL;
};
$arguments120 = [];
$arguments120['value'] = NULL;
$arguments120['name'] = NULL;
$arguments120['name'] = 'styles';
$output122 = '';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('variantStyle');
};
$arguments123 = [];

$output122 .= BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= ' ';

$output122 .= $renderingContext->getVariableProvider()->getByPath('styles');
$arguments120['value'] = $output122;
$renderChildrenClosure121 = ($arguments120['value'] !== null) ? function() use ($arguments120) { return $arguments120['value']; } : $renderChildrenClosure121;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output51 .= '
                ';
return $output51;
};
$arguments47 = [];
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = [];
$array49['0'] = $renderingContext->getVariableProvider()->getByPath('width');
$array49['1'] = ' && ';
$array49['2'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes');

$expression50 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output38 .= '
            ';
return $output38;
};
$arguments36 = [];
$arguments36['each'] = NULL;
$arguments36['as'] = NULL;
$arguments36['key'] = NULL;
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$arguments36['each'] = $renderingContext->getVariableProvider()->getByPath('variants');
$arguments36['key'] = 'name';
$arguments36['as'] = 'variant';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output5 .= '
            <style>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('styles');
};
$arguments125 = [];
$arguments125['value'] = NULL;

$output5 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output5 .= '</style>
        </div>
    </div>
';
return $output5;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = [];
$array3['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0');

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#