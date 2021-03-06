<?php
/*
 * This file is part of Alom Graphviz.
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alom\Graphviz\Tests;

use Alom\Graphviz\Node;

class NodeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $node = new Node('A');

        $this->assertEquals("A;\n", $node->render(), "Render basic");
    }
}
