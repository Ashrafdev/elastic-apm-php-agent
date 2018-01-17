<?php
namespace PhilKra\Tests\Stores;

use \PhilKra\Stores\ErrorsStore;
use \PhilKra\Events\Error;
use \PhilKra\Exception\Transaction\DuplicateTransactionNameException;
use \PHPUnit\Framework\TestCase;

/**
 * Test Case for @see \PhilKra\Stores\ErrorsStore
 */
final class ErrorsStoreTest extends TestCase {

  /**
   * @covers \PhilKra\Stores\ErrorsStoreTest::register
   * @covers \PhilKra\Stores\ErrorsStoreTest::list
   */
  public function testCaptureErrorExceptionAndListIt() {
    $store = new ErrorsStore();
    $error = new \Error( 'error' );

    // Store the Error and Check that it's "stored"
    $store->register( $error );
    $list = $store->list();

    $this->assertEquals( count( $list ), 1 );
  }

}
