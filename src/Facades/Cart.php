<?php
namespace Gloudemans\Shoppingcart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static \Gloudemans\Shoppingcart\Cart instance(string|null $instance)
 * @method static \Gloudemans\Shoppingcart\Cart currentInstance()
 * @method static \Gloudemans\Shoppingcart\Cart add(mixed $id, mixed $name, int|float $qty, float $price, array $options = [])
 * @method static \Gloudemans\Shoppingcart\Cart associate(string $rowId, mixed $model)
 * @method static \Gloudemans\Shoppingcart\Cart update(string $rowId, mixed $qty)
 * @method static \Gloudemans\Shoppingcart\Cart remove(string $rowId)
 * @method static \Gloudemans\Shoppingcart\Cart get(string $rowId)
 * @method static \Gloudemans\Shoppingcart\Cart destroy()
 * @method static \Gloudemans\Shoppingcart\Cart content()
 * @method static \Gloudemans\Shoppingcart\Cart count()
 * @method static \Gloudemans\Shoppingcart\Cart total(int $decimals = null, string $decimalPoint = null, string $thousandSeperator = null)
 * @method static \Gloudemans\Shoppingcart\Cart tax(int $decimals = null, string $decimalPoint = null, string $thousandSeperator = null)
 * @method static \Gloudemans\Shoppingcart\Cart subtotal(int $decimals = null, string $decimalPoint = null, string $thousandSeperator = null)
 * @method static \Gloudemans\Shoppingcart\Cart search(Closure $search)
 * @method static \Gloudemans\Shoppingcart\Cart setTax(string $rowId, int|float $taxRate)
 * @method static \Gloudemans\Shoppingcart\Cart store(mixed $identifier)
 * @method static \Gloudemans\Shoppingcart\Cart restore(mixed $identifier)
 *
 * @see \Gloudemans\Shoppingcart\Cart
 */
class Cart extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
