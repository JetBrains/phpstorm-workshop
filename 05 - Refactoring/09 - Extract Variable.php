<?php
/**
 * Extract Variable
 *
 * Puts the result of a selected expression into a variable. The original expression is replaced with the new variable.
 *
 * Ctrl+Alt+V (Windows/Linux)
 * Command+Alt+V (Mac OS X)
 */

namespace Refactoring\JetBrains;

class Blog {
    protected $_blogName = 'My Blog';
    protected $_blogSubtitle = 'Just another blog';

    public function renderHeader() {
        // 1. Place the caret on _blogSubtitle.
        //    Extract the "{$this->_blogName} - {$this->_blogSubtitle}" string into a variable called $title.
        //    Note the IDE asks us which expression should be extracted. Select the entire string.
        echo '<title>';
        echo "{$this->_blogName} - {$this->_blogSubtitle}";
        echo '</title>';

        echo '<h1>';
        echo "{$this->_blogName} - {$this->_blogSubtitle}";
        echo '</h1>';
    }
}