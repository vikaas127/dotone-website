<?php
return [
    'h2' => ['Made to recipe.', 'Costed by batch.'],
    'features' => [
        ['recipe', 'Recipe against actual', 'Ingredients the recipe called for against what the batch really used.'],
        ['margin', 'Margin by SKU', 'Cost and selling price for every pack size, updated as ingredient prices change.'],
        ['trace', 'Batch to distributor', 'Every batch code linked to the invoices it left on.'],
    ],
    'cards' => [
        ['type' => 'bars', 'span' => 4, 'for' => 'recipe', 'title' => 'Batch NM-0921 · Masala namkeen', 'note' => 'actual vs recipe', 'rows' => [['Besan', 82, 80, 'ok', '412 kg'], ['Groundnut oil', 91, 80, 'warn', '186 L'], ['Spice mix', 79, 80, 'ok', '38 kg'], ['Salt', 80, 80, 'ok', '14 kg']]],
        ['type' => 'gauge', 'span' => 2, 'for' => 'recipe', 'title' => 'Batch yield', 'pct' => 94, 'min' => '0%', 'center' => '94%', 'max' => '100%'],
        ['type' => 'table', 'span' => 3, 'for' => 'margin', 'title' => 'Margin by pack', 'cols' => ['Cost', 'Margin'], 'rows' => [['Namkeen 200 g', [['₹31', '', ''], ['24%', '▼ 2%', 'down']]], ['Namkeen 1 kg', [['₹142', '', ''], ['29%', '▲ 1%', 'up']]], ['Mango drink 200 ml', [['₹9.4', '', ''], ['21%', '', '']]]]],
        ['type' => 'list', 'span' => 3, 'for' => 'trace', 'title' => 'Batch NM-0918 went to', 'rows' => [['Shiv Distributors · Pune', '420 cartons'], ['Mahalaxmi Agencies · Nashik', '260 cartons'], ['Godown stock · Pune', '75 cartons']]],
        ['type' => 'alert', 'span' => 6, 'for' => 'recipe margin', 'head' => 'Purchase Agent', 'text' => 'Groundnut oil rate is up ₹9 per litre from the last PO, and batches are using more than the recipe. Vendor comparison drafted.', 'icon' => 'cart', 'meta' => [['Last rate', '₹148 / L'], ['Quoted', '₹157 / L']], 'primary' => 'Review quotes', 'done' => 'Sent to purchase'],
    ],
];
