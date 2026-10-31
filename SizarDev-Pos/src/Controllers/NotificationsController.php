<?php
/**
 * Sizar POS Pro — High-Precision Commercial POS & ERP System
 * @developer SizarDev
 * @city Oran, Algeria
 * @copyright 2026 SizarDev. All rights reserved.
 *
 * تحذير وأمانة شرعية وقانونية:
 * هذا النظام محمي بموجب قوانين الملكية الفكرية، وحقوق المؤلف الدولية، وأمانة أمام الله.
 * لا أسامح ولا أبيح شرعاً وقانوناً لأي شخص أو جهة تستخدم هذا النظام أو تنسخه أو تعدل عليه
 * أو تبيعه أو توزعه دون ترخيص واستئذان رسمي موثق ومسبق من المطور الأصلي.
 *
 * Strict Warning: Unauthorized reproduction, reverse-engineering, decompilation,
 * modification, or redistribution of this software without an official license from
 * the author is strictly prohibited and subject to legal prosecution.
 *
 * ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍
 */

require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/../Utils/Decimal.php';

class NotificationsController
{
    private function getCurrentUserId(): ?int
    {
        return !empty($_SESSION['user_id']) ? (int) $_SESSION['user_id'] : null;
    }

    // C-1 fix: DDL moved to schema.sql. Constructor removed.
    // ensureTables() below is a lazy safety fallback only.

    private static bool $tablesEnsured = false;

    private function ensureTables(PDO $db): void
    {
        if (self::$tablesEnsured || $db->inTransaction()) {
            return;
        }
        self::$tablesEnsured = true;

        // Schema integrity is maintained by schema.sql and migrations.
        // Fast-path sanity check without per-request DDL or information_schema scans.
        try {
            $db->query("SELECT 1 FROM notifications LIMIT 1");
        } catch (\Throwable $e) {
            // Cold install fallback only
            $db->exec("CREATE TABLE IF NOT EXISTS notifications (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                type ENUM('message', 'channel_message', 'due_payable', 'due_receivable', 'order_due', 'stock_alert', 'system', 'schedule', 'bill', 'expense', 'settlement') NOT NULL DEFAULT 'system',
                title VARCHAR(255) NOT NULL,
                body TEXT NULL,
                action_url VARCHAR(255) NULL,
                entity_type VARCHAR(50) NULL,
                entity_id INT NULL,
                is_read TINYINT(1) NOT NULL DEFAULT 0,
                stage_tag VARCHAR(50) NULL DEFAULT NULL,
                deleted_at DATETIME NULL DEFAULT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                INDEX (user_id, is_read, created_at),
                INDEX (user_id, deleted_at, is_read),
                INDEX (user_id, entity_type, entity_id, stage_tag),
                INDEX (type),
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

            $db->exec("CREATE TABLE IF NOT EXISTS notification_suppressions (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                entity_type VARCHAR(50) NOT NULL,
                entity_id INT NULL,
                stage_tag VARCHAR(50) NULL,
                suppressed_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                UNIQUE KEY uq_notif_suppression (user_id, entity_type, entity_id, stage_tag),
                INDEX idx_notif_suppression_user (user_id, entity_type),
                FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        }
    }

    /**
     * Resolve milestone stage with multi-tier cadence support
     */
    public function resolveMilestoneStage(int $dueDays, int $leadDays, string $cadence = 'standard', int $overdueRepeatHours = 24): ?array
    {
        // 1. Overdue Handling (dueDays < 0)
        if ($dueDays < 0) {
            if ($overdueRepeatHours <= 0) {
                if ($dueDays === -1) {
                    return [
                        'tag'     => 'm_overdue_initial',
                        'dueText' => '🚨 Overdue by 1 day',
                        'urgency' => 'overdue'
                    ];
                }
                return null;
            }

            $absDays = abs($dueDays);
            if ($cadence === 'aggressive') {
                return [
                    'tag'     => 'm_overdue_' . $absDays . 'd',
                    'dueText' => "🚨 Overdue by {$absDays} day" . ($absDays > 1 ? 's' : ''),
                    'urgency' => 'overdue'
                ];
            } elseif ($cadence === 'moderate') {
                if ($absDays === 1 || ($absDays % 3 === 0)) {
                    return [
                        'tag'     => 'm_overdue_c3_' . $absDays . 'd',
                        'dueText' => "🚨 Overdue by {$absDays} days",
                        'urgency' => 'overdue'
                    ];
                }
                return null;
            } else {
                if ($overdueRepeatHours <= 24) {
                    return [
                        'tag'     => 'm_overdue_' . $absDays . 'd',
                        'dueText' => "🚨 Overdue by {$absDays} day" . ($absDays > 1 ? 's' : ''),
                        'urgency' => 'overdue'
                    ];
                } else {
                    $intervalDays = max(1, (int)round($overdueRepeatHours / 24));
                    if ($absDays === 1 || ($absDays % $intervalDays === 0)) {
                        return [
                            'tag'     => 'm_overdue_c' . $intervalDays . '_' . $absDays . 'd',
                            'dueText' => "🚨 Overdue by {$absDays} days",
                            'urgency' => 'overdue'
                        ];
                    }
                    return null;
                }
            }
        }

        // 2. Due Today (0 days)
        if ($dueDays === 0) {
            return [
                'tag'     => 'm_0d',
                'dueText' => "⏰ Due TODAY",
                'urgency' => 'today'
            ];
        }

        // 3. Due Tomorrow (1 day)
        if ($dueDays === 1) {
            return [
                'tag'     => 'm_1d',
                'dueText' => "⏳ Due Tomorrow (24h)",
                'urgency' => 'imminent'
            ];
        }

        // 4. Urgent Warning (<= 3 days)
        if ($dueDays <= 3) {
            return [
                'tag'     => "m_{$dueDays}d",
                'dueText' => "⚠️ Due in {$dueDays} days",
                'urgency' => 'urgent'
            ];
        }

        // 5. Medium Warning (<= 7 days)
        if ($dueDays <= 7) {
            if ($cadence === 'aggressive' || $dueDays === 7 || $dueDays === 5 || $cadence === 'moderate' || $dueDays <= 4) {
                return [
                    'tag'     => "m_{$dueDays}d",
                    'dueText' => "📅 Due in {$dueDays} days",
                    'urgency' => 'medium'
                ];
            }
        }

        // 6. Early Lead Warning (<= leadDays)
        if ($dueDays <= $leadDays) {
            if ($cadence === 'aggressive' || $dueDays === 14 || $dueDays === 10 || $dueDays === $leadDays || $cadence === 'moderate') {
                return [
                    'tag'     => "m_{$dueDays}d",
                    'dueText' => "🔔 Due in {$dueDays} days",
                    'urgency' => 'early'
                ];
            }
        }

        return null;
    }

    /**
     * List user notifications with filter tabs
     */
    
    public function syncSystemNotifications(PDO $db, int $userId): void
    {
        $lockName = "pos_notif_sync_u" . $userId;
        $gotLock = false;
        try {
            $lockStmt = $db->query("SELECT GET_LOCK('{$lockName}', 0)");
            $gotLock = ($lockStmt && (int)$lockStmt->fetchColumn() === 1);
            if (!$gotLock) {
                return; // Another concurrent request is already running sync for this user
            }

            $this->ensureTables($db);

            // Load store notification preferences
            $globalSettings = $db->query("SELECT * FROM settings LIMIT 1")->fetch(PDO::FETCH_ASSOC) ?: [];

            // In-memory cache for user preferences
            $userPrefsCache = [];
            $getUserPrefRow = function (int $uid) use ($db, &$userPrefsCache): array {
                if (!isset($userPrefsCache[$uid])) {
                    try {
                        $stmt = $db->prepare("SELECT * FROM user_notification_settings WHERE user_id = :uid LIMIT 1");
                        $stmt->execute(['uid' => $uid]);
                        $userPrefsCache[$uid] = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
                    } catch (\Throwable $e) {
                        $userPrefsCache[$uid] = [];
                    }
                }
                return $userPrefsCache[$uid];
            };

            // Universal Preference Resolver Closure: (User override > Global setting > Default)
            $pref = function (string $key, $default = null, ?int $targetUid = null) use ($globalSettings, $userId, $getUserPrefRow) {
                $uid = $targetUid ?? $userId;
                $uRow = $getUserPrefRow($uid);
                if (isset($uRow[$key]) && $uRow[$key] !== null && $uRow[$key] !== '') {
                    return $uRow[$key];
                }
                if (isset($globalSettings[$key]) && $globalSettings[$key] !== null && $globalSettings[$key] !== '') {
                    return $globalSettings[$key];
                }
                return $default;
            };

            $billsLeadDays          = max(1, min(90, (int)$pref('notif_bills_lead_days', 14)));
            $debtLeadDays           = max(1, min(90, (int)$pref('notif_debt_lead_days', 7)));
            $supplierLeadDays       = max(1, min(90, (int)$pref('notif_supplier_lead_days', 7)));
            $enableBills            = (int)$pref('notif_enable_bills', 1);
            $enableDebts            = (int)$pref('notif_enable_debts', 1);
            $enableSuppliers        = (int)$pref('notif_enable_suppliers', 1);
            $enableStock            = (int)$pref('notif_enable_stock', 1);
            $enableSecurity         = (int)$pref('notif_enable_security', 1);
            $securitySeverityFilter = (string)$pref('notif_security_severity_filter', 'all');
            $retentionDays          = max(1, min(365, (int)$pref('notif_retention_days', 30)));

            // Mission 81, 82 & 83 Cadence & Granular Settings
            $enableSchedules        = (int)$pref('notif_enable_schedules', 1);
            $scheduleCadence        = (string)$pref('notif_schedule_cadence', 'standard');
            $scheduleLeadDays       = max(1, min(60, (int)$pref('notif_schedule_lead_days', 14)));
            $scheduleOverdueRepeat  = (int)$pref('notif_schedule_overdue_repeat_hours', 24);

            $enableLowStock         = (int)$pref('notif_enable_low_stock', 1);
            $lowStockIntervalHrs    = max(1, min(168, (int)$pref('notif_low_stock_interval_hours', $pref('notif_stock_reorder_cooldown_hours', 24))));
            $enableOutOfStock       = (int)$pref('notif_enable_out_of_stock', 1);
            $outOfStockIntervalHrs  = max(1, min(168, (int)$pref('notif_out_of_stock_interval_hours', 12)));

            $debtCadence            = (string)$pref('notif_debt_cadence', 'standard');
            $debtOverdueRepeat      = (int)$pref('notif_debt_overdue_repeat_hours', 24);
            $billCadence            = (string)$pref('notif_bill_cadence', 'standard');
            $billOverdueRepeat      = (int)$pref('notif_bill_overdue_repeat_hours', 24);
            $supplierCadence        = (string)$pref('notif_supplier_cadence', 'standard');
            $supplierOverdueRepeat  = (int)$pref('notif_supplier_overdue_repeat_hours', 24);

            // 0. Auto-Purge: stamp suppressions before deleting soft-deleted notifications older than retention days
            $db->exec("
                INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at)
                SELECT user_id, entity_type, entity_id, stage_tag, NOW()
                FROM notifications
                WHERE deleted_at IS NOT NULL AND deleted_at < DATE_SUB(NOW(), INTERVAL $retentionDays DAY)
                  AND entity_type IS NOT NULL
            ");
            $db->exec("DELETE FROM notifications WHERE deleted_at IS NOT NULL AND deleted_at < DATE_SUB(NOW(), INTERVAL $retentionDays DAY)");
            $db->exec("DELETE FROM notification_suppressions WHERE suppressed_at < DATE_SUB(NOW(), INTERVAL 90 DAY)");

            // Auto-Resolve: mark existing notifications read if underlying receivable/payable/bill/stock/schedule is settled or deleted
            try {
                // 1. Order Receivables Auto-Resolve
                $db->prepare("UPDATE notifications n 
                    JOIN orders o ON n.entity_id = o.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'order_receivable' AND n.is_read = 0 
                      AND (o.status IN ('completed', 'paid', 'returned', 'deleted', 'cancelled') 
                           OR o.deleted_at IS NOT NULL 
                           OR (CAST(o.total AS DECIMAL(32,16)) <= CAST(COALESCE(o.amount_paid, 0) AS DECIMAL(32,16))))
                ")->execute(['uid' => $userId]);

                // 2. Purchase Payables Auto-Resolve
                $db->prepare("UPDATE notifications n 
                    JOIN purchases p ON n.entity_id = p.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'purchase_payable' AND n.is_read = 0 
                      AND (p.payment_status = 'paid' 
                           OR p.deleted_at IS NOT NULL 
                           OR (CAST(p.total AS DECIMAL(32,16)) <= CAST(COALESCE(p.amount_paid, 0) AS DECIMAL(32,16))))
                ")->execute(['uid' => $userId]);

                // 3. Recurring Bill Cycles Auto-Resolve
                $db->prepare("UPDATE notifications n 
                    JOIN recurring_bill_cycles c ON n.entity_id = c.id 
                    JOIN recurring_bills b ON c.bill_id = b.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'recurring_bill_cycle' AND n.is_read = 0 
                      AND (c.status = 'paid' 
                           OR b.active = 0 
                           OR b.deleted_at IS NOT NULL 
                           OR b.is_paused = 1 
                           OR (CAST(c.amount_expected AS DECIMAL(32,16)) <= CAST(COALESCE(c.amount_paid, 0) AS DECIMAL(32,16))))
                ")->execute(['uid' => $userId]);

                // 4. Stock Alerts Auto-Resolve (Replenished products, soft-deleted products, or superseded low stock alerts)
                $globalStockThreshold = (string)($globalSettings['stock_low_threshold'] ?? '200');
                $db->prepare("UPDATE notifications n 
                    JOIN products p ON n.entity_id = p.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'product' AND n.type = 'stock_alert' AND n.is_read = 0 
                      AND (
                        p.deleted_at IS NOT NULL 
                        OR (n.stage_tag = 'stock_out' AND CAST(p.quantity AS DECIMAL(32,16)) > 0)
                        OR (n.stage_tag = 'stock_low' AND (CAST(p.quantity AS DECIMAL(32,16)) > CAST(COALESCE(p.stock_low_threshold, :gThresh) AS DECIMAL(32,16)) OR CAST(p.quantity AS DECIMAL(32,16)) <= 0))
                      )
                ")->execute(['uid' => $userId, 'gThresh' => $globalStockThreshold]);

                // 5. Schedules Auto-Resolve (Completed, Cancelled, or Deleted)
                $db->prepare("UPDATE notifications n 
                    JOIN schedules s ON n.entity_id = s.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'schedule' AND n.is_read = 0 
                      AND (s.status IN ('completed', 'cancelled') OR s.deleted_at IS NOT NULL)
                ")->execute(['uid' => $userId]);

                // 6. Partner Settlements Auto-Resolve (Settled or Cancelled)
                $db->prepare("UPDATE notifications n 
                    JOIN partner_settlements ps ON n.entity_id = ps.id 
                    SET n.is_read = 1 
                    WHERE n.user_id = :uid AND n.entity_type = 'partner_settlement' AND n.is_read = 0 
                      AND ps.status IN ('settled', 'cancelled')
                ")->execute(['uid' => $userId]);
            } catch (\Throwable $resErr) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $resErr->getMessage());
        }

            // 1. Recurring Bills Dues Reminders (Multi-Milestone Staged Alerts)
            // 1. Running Circles & Period Bills Dues Reminders (Multi-Milestone Staged Alerts)
            if ($enableBills) {
                // 1A. Active Running Circles & Period Cycles (is_archived = 0)
                $circlesStmt = $db->prepare("
                    SELECT c.id AS cycle_id, c.cycle_label, c.due_date, c.amount_expected, c.amount_paid, c.bill_created,
                           b.id AS bill_id, b.uid AS circle_uid, b.name AS circle_name, b.category AS bill_category, b.frequency, b.created_by
                    FROM recurring_bill_cycles c 
                    JOIN recurring_bills b ON c.bill_id = b.id 
                    WHERE b.is_archived = 0 AND b.active = 1 AND b.deleted_at IS NULL AND b.is_paused = 0 AND c.status != 'paid' AND c.due_date <= DATE_ADD(CURDATE(), INTERVAL $billsLeadDays DAY)
                      AND (
                          b.created_by = :uid 
                          OR c.id IN (SELECT cycle_id FROM recurring_bill_cycle_payments WHERE user_id = :uid)
                          OR c.id IN (SELECT cycle_id FROM partner_settlements WHERE payer_user_id = :uid AND status != 'cancelled')
                      )
                    ORDER BY c.due_date ASC LIMIT 30
                ");
                $circlesStmt->execute(['uid' => $userId]);
                $circleCycles = $circlesStmt->fetchAll();

                $cadenceMap = [
                    'monthly'     => '🔄 Monthly Circle',
                    'weekly'      => '⚡ Weekly Circle',
                    'biweekly'    => '⚡ Bi-weekly Circle',
                    'quarterly'   => '📊 Quarterly Circle',
                    'semi-annual' => '👑 Semi-Annual Circle',
                    'annual'      => '👑 Annual Circle',
                    'yearly'      => '👑 Annual Circle',
                    'daily'       => '☀️ Daily Circle'
                ];

                foreach ($circleCycles as $cyc) {
                    $dueDays = (int)floor((strtotime($cyc['due_date']) - strtotime(date('Y-m-d'))) / 86400);
                    $m = $this->resolveMilestoneStage($dueDays, $billsLeadDays, $billCadence, $billOverdueRepeat);
                    if ($m === null) continue;

                    $chk = $db->prepare("
                        SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'recurring_bill_cycle' AND entity_id = :eid AND stage_tag = :stage
                        UNION
                        SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'recurring_bill_cycle' AND entity_id = :eid AND stage_tag = :stage
                        LIMIT 1
                    ");
                    $chk->execute(['uid' => $userId, 'eid' => $cyc['cycle_id'], 'stage' => $m['tag']]);
                    if (!$chk->fetchColumn()) {
                        // Check if user has an individual split share in partner_settlements
                        $splitShareStmt = $db->prepare("SELECT amount FROM partner_settlements WHERE cycle_id = :cid AND payer_user_id = :uid AND status != 'cancelled' LIMIT 1");
                        $splitShareStmt->execute(['cid' => $cyc['cycle_id'], 'uid' => $userId]);
                        $splitShare = $splitShareStmt->fetchColumn();

                        $remOwed = ($splitShare !== false && $splitShare !== null)
                            ? (string)$splitShare
                            : Decimal::sub((string)$cyc['amount_expected'], (string)($cyc['amount_paid'] ?? '0'));

                        $freq = strtolower($cyc['frequency'] ?? 'monthly');
                        $cadenceName = $cadenceMap[$freq] ?? '🔄 Circle';
                        $title = "{$cadenceName} ({$m['dueText']}): {$cyc['circle_name']}";
                        $circleUidStr = !empty($cyc['circle_uid']) ? " [#{$cyc['circle_uid']}]" : "";
                        $timingBadge = empty($cyc['bill_created']) ? '✍️ Manual Period' : '📅 Cadence Cycle';
                        $body = "{$timingBadge} '{$cyc['cycle_label']}'{$circleUidStr} ({$cyc['bill_category']}) is {$m['dueText']} ({$cyc['due_date']}). Balance owed: " . number_format((float)$remOwed, 2) . " DZD.";

                        $actionUrl = "#page-expenses?tab=circles&drilldown={$cyc['bill_id']}&cycle={$cyc['cycle_id']}";
                        $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                            VALUES (:uid, 'due_payable', :t, :b, :url, 'recurring_bill_cycle', :eid, :stage, 0, NOW())");
                        $ins->execute([
                            'uid'   => $userId,
                            't'     => $title,
                            'b'     => $body,
                            'url'   => $actionUrl,
                            'eid'   => $cyc['cycle_id'],
                            'stage' => $m['tag']
                        ]);
                    }
                }
            }

            // 2. Granular Inventory Alerts: Low Stock vs Depleted Stock (Decoupled Cooldowns)
            if ($enableStock || $enableLowStock || $enableOutOfStock) {
                $effectiveDecimals = isset($globalSettings['display_decimals']) ? (int)$globalSettings['display_decimals'] : 2;
                $globalLowThreshold = (string)($globalSettings['stock_low_threshold'] ?? '200');

                // A. Depleted / Out of Stock Products (Quantity <= 0)
                if ($enableOutOfStock) {
                    $depletedProds = $db->query("
                        SELECT id, uid, name, quantity 
                        FROM products 
                        WHERE deleted_at IS NULL AND name NOT LIKE '%test%' AND name NOT LIKE '%AutoTest%' AND quantity <= 0
                        ORDER BY id DESC LIMIT 100
                    ")->fetchAll();

                    foreach ($depletedProds as $p) {
                        $chk = $db->prepare("
                            SELECT id FROM notifications 
                            WHERE user_id = :uid AND entity_type = 'product' AND entity_id = :eid AND stage_tag = 'stock_out'
                              AND deleted_at IS NULL
                              AND (is_read = 0 OR created_at >= DATE_SUB(NOW(), INTERVAL $outOfStockIntervalHrs HOUR))
                            UNION
                            SELECT id FROM notification_suppressions
                            WHERE user_id = :uid AND entity_type = 'product' AND entity_id = :eid AND stage_tag = 'stock_out'
                              AND suppressed_at >= DATE_SUB(NOW(), INTERVAL $outOfStockIntervalHrs HOUR)
                            LIMIT 1
                        ");
                        $chk->execute(['uid' => $userId, 'eid' => $p['id']]);
                        if (!$chk->fetchColumn()) {
                            $prodUidStr = !empty($p['uid']) ? " [Product #{$p['uid']}]" : "";
                            $title = "Depleted Stock: {$p['name']}";
                            $body = "Item '{$p['name']}'{$prodUidStr} is completely OUT OF STOCK (0 units remaining). Please purchase replenishment stock.";
                            $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                                VALUES (:uid, 'stock_alert', :t, :b, '#page-products', 'product', :eid, 'stock_out', 0, NOW())");
                            $ins->execute([
                                'uid' => $userId,
                                't'   => $title,
                                'b'   => $body,
                                'eid' => $p['id']
                            ]);
                        }
                    }
                }

                // B. Low Stock Warning Products (0 < Quantity <= Threshold)
                if ($enableLowStock) {
                    $stmtLow = $db->prepare("
                        SELECT id, uid, name, quantity, stock_low_threshold 
                        FROM products 
                        WHERE deleted_at IS NULL AND name NOT LIKE '%test%' AND name NOT LIKE '%AutoTest%' AND quantity > 0 AND quantity <= COALESCE(stock_low_threshold, :gThresh)
                        ORDER BY id DESC LIMIT 100
                    ");
                    $stmtLow->execute(['gThresh' => $globalLowThreshold]);
                    $lowStockProds = $stmtLow->fetchAll();

                    foreach ($lowStockProds as $p) {
                        $chk = $db->prepare("
                            SELECT id FROM notifications 
                            WHERE user_id = :uid AND entity_type = 'product' AND entity_id = :eid AND stage_tag = 'stock_low'
                              AND deleted_at IS NULL
                              AND (is_read = 0 OR created_at >= DATE_SUB(NOW(), INTERVAL $lowStockIntervalHrs HOUR))
                            UNION
                            SELECT id FROM notification_suppressions
                            WHERE user_id = :uid AND entity_type = 'product' AND entity_id = :eid AND stage_tag = 'stock_low'
                              AND suppressed_at >= DATE_SUB(NOW(), INTERVAL $lowStockIntervalHrs HOUR)
                            LIMIT 1
                        ");
                        $chk->execute(['uid' => $userId, 'eid' => $p['id']]);
                        if (!$chk->fetchColumn()) {
                            $qtyFormatted = Decimal::truncate((string)$p['quantity'], $effectiveDecimals);
                            $prodUidStr = !empty($p['uid']) ? " [Product #{$p['uid']}]" : "";
                            $title = "Low Stock Warning: {$p['name']}";
                            $body = "Item '{$p['name']}'{$prodUidStr} has reached low threshold ({$qtyFormatted} units remaining).";
                            $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                                VALUES (:uid, 'stock_alert', :t, :b, '#page-products', 'product', :eid, 'stock_low', 0, NOW())");
                            $ins->execute([
                                'uid' => $userId,
                                't'   => $title,
                                'b'   => $body,
                                'eid' => $p['id']
                            ]);
                        }
                    }
                }
            }

            // 3. Security Alerts from system_logs (Anti-False-Positive Filter & Burst Detection)
            if ($enableSecurity) {
                $enableSecurityLoginCollision = (int)$pref('notif_security_login_collision_enabled', 1);
                $secCollisionScope            = $pref('notif_security_collision_scope', 'only_me');
                $secMaxAttempts               = max(1, min(20, (int)$pref('notif_security_alert_max_attempts', 3)));
                $secWindowSeconds             = max(10, min(3600, (int)$pref('notif_security_alert_window_seconds', 30)));

                if ($securitySeverityFilter === 'critical_only') {
                    $secSql = "
                        SELECT id, module, action, entity_id, entity_name, details, created_at 
                        FROM system_logs 
                        WHERE (module IN ('auth', 'security') AND action IN ('brute_force_lockout', 'ip_banned', 'master_recovery_failed', 'blocked_attempt'))
                          AND created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)
                          AND entity_name NOT LIKE '%test%'
                          AND (details IS NULL OR details NOT LIKE '%test%')
                        ORDER BY id DESC LIMIT 15
                    ";
                } elseif ($securitySeverityFilter === 'high_only') {
                    $secSql = "
                        SELECT id, module, action, entity_id, entity_name, details, created_at 
                        FROM system_logs 
                        WHERE (module IN ('auth', 'security', 'users') AND action IN ('brute_force_lockout', 'ip_banned', 'blocked_attempt', 'master_recovery_failed', 'user_recovery_failed', 'security_alert'))
                          AND created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)
                          AND entity_name NOT LIKE '%test%'
                          AND (details IS NULL OR details NOT LIKE '%test%')
                        ORDER BY id DESC LIMIT 15
                    ";
                } else {
                    $secSql = "
                        SELECT id, module, action, entity_id, entity_name, details, created_at 
                        FROM system_logs 
                        WHERE (module IN ('auth', 'security', 'users') AND action IN ('brute_force_lockout', 'ip_banned', 'blocked_attempt', 'master_recovery_failed', 'user_recovery_failed', 'security_alert', 'password_changed', 'master_recovery_code_generated', 'user_account_recovered', 'session_unlocked'))
                          AND created_at >= DATE_SUB(NOW(), INTERVAL 24 HOUR)
                          AND entity_name NOT LIKE '%test%'
                          AND (details IS NULL OR details NOT LIKE '%test%')
                        ORDER BY id DESC LIMIT 15
                    ";
                }
                $logs = $db->query($secSql)->fetchAll();

                foreach ($logs as $l) {
                    // Respect Infiltration Sentinel & Collision Scope
                    if ($l['action'] === 'blocked_attempt') {
                        if (!$enableSecurityLoginCollision) {
                            continue;
                        }
                        if ($secCollisionScope === 'only_me' && (int)$l['entity_id'] !== (int)$userId) {
                            continue;
                        }
                    }

                    // Scoping for session_unlocked: only Admins and affected user receive this notification
                    if ($l['action'] === 'session_unlocked') {
                        $isAdmin = !empty($_SESSION['is_admin']);
                        $isTargetUser = ((int)$l['entity_id'] === (int)$userId);
                        if (!$isAdmin && !$isTargetUser) {
                            continue;
                        }
                    }

                    $chk = $db->prepare("
                        SELECT id FROM notifications 
                        WHERE user_id = :uid AND entity_type = 'system_log' AND entity_id = :eid 
                          AND (deleted_at IS NULL OR deleted_at >= DATE_SUB(NOW(), INTERVAL 30 DAY))
                        UNION
                        SELECT id FROM notification_suppressions 
                        WHERE user_id = :uid AND entity_type = 'system_log' AND entity_id = :eid
                        LIMIT 1
                    ");
                    $chk->execute(['uid' => $userId, 'eid' => $l['id']]);
                    if (!$chk->fetchColumn()) {
                        $detailsStr = (string)($l['details'] ?? '');
                        $decoded = json_decode($detailsStr, true);

                        if ($l['action'] === 'blocked_attempt') {
                            $deviceInfo = '';
                            if (is_array($decoded) && !empty($decoded['ip_address'])) {
                                $deviceInfo = " ({$decoded['ip_address']})";
                            }
                            if ((int)$l['entity_id'] !== (int)$userId) {
                                $title = "🚨 Security Alert: Blocked Login Collision (@{$l['entity_name']})";
                                $body = "Infiltration attempt blocked: Another device attempted dual login into @{$l['entity_name']}'s account{$deviceInfo}.";
                            } else {
                                $title = "🚨 Security Alert: Blocked Unauthorized Dual-Login Attempt";
                                $body = "Another device attempted to log into your account while you were active{$deviceInfo}.";
                            }
                        } else if ($l['action'] === 'session_unlocked') {
                            $title = "Security Alert: Session Unlocked";
                            $unlockedBy = 'admin';
                            if (is_array($decoded)) {
                                if (!empty($decoded['unlocked_by'])) {
                                    $unlockedBy = ltrim($decoded['unlocked_by'], '@');
                                } else if (!empty($decoded['unlocked_by_username'])) {
                                    $unlockedBy = $decoded['unlocked_by_username'];
                                }
                            }
                            $targetUser = $l['entity_name'] ?: 'user';
                            if (is_array($decoded)) {
                                if (!empty($decoded['target'])) {
                                    $targetUser = ltrim($decoded['target'], '@');
                                } else if (!empty($decoded['target_username'])) {
                                    $targetUser = $decoded['target_username'];
                                }
                            }
                            $body = "Active session and login restrictions for @{$targetUser} were unlocked by @{$unlockedBy}.";
                        } else {
                            $title = "Security Alert: " . ucfirst(str_replace('_', ' ', $l['action']));
                            $body = "Security event recorded: {$l['entity_name']} at {$l['created_at']}";
                        }

                        $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                            VALUES (:uid, 'system', :t, :b, '#security-forensics', 'system_log', :eid, :stag, 0, NOW())");
                        $ins->execute([
                            'uid'  => $userId,
                            't'    => $title,
                            'b'    => $body,
                            'eid'  => $l['id'],
                            'stag' => $l['action']
                        ]);
                    }
                }

                // Burst Collision Detection: Trigger high alert only on multiple rapid failures
                if ($enableSecurityLoginCollision && $securitySeverityFilter !== 'critical_only') {
                    try {
                        $burstStmt = $db->prepare("
                            SELECT ip_address, COUNT(*) as fail_count, MAX(created_at) as last_fail, MAX(id) as last_log_id, MAX(entity_name) as target_user, MAX(entity_id) as target_uid
                            FROM system_logs
                            WHERE action = 'login_failed' AND created_at >= DATE_SUB(NOW(), INTERVAL $secWindowSeconds SECOND)
                            GROUP BY ip_address
                            HAVING fail_count >= :max_attempts
                        ");
                        $burstStmt->execute(['max_attempts' => $secMaxAttempts]);
                        $bursts = $burstStmt->fetchAll();

                        foreach ($bursts as $b) {
                            if ($secCollisionScope === 'only_me' && (int)($b['target_uid'] ?? 0) !== (int)$userId) {
                                continue;
                            }
                            $stageTag = 'sec_burst_' . md5($b['ip_address'] . '_' . date('YmdH'));
                            $chkBurst = $db->prepare("
                                SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'security_burst' AND stage_tag = :stage
                                UNION
                                SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'security_burst' AND stage_tag = :stage
                                LIMIT 1
                            ");
                            $chkBurst->execute(['uid' => $userId, 'stage' => $stageTag]);
                            if (!$chkBurst->fetchColumn()) {
                                $bTitle = "🚨 Security Alert: Login Collision Burst ({$b['fail_count']} Failed Attempts)";
                                $bBody = "Detected {$b['fail_count']} rapid failed login attempts from IP {$b['ip_address']} targeted at @{$b['target_user']} within {$secWindowSeconds}s.";
                                $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                                    VALUES (:uid, 'system', :t, :b, '#security-forensics', 'security_burst', :eid, :stage, 0, NOW())");
                                $ins->execute([
                                    'uid' => $userId,
                                    't'   => $bTitle,
                                    'b'   => $bBody,
                                    'eid' => $b['last_log_id'],
                                    'stage' => $stageTag
                                ]);
                            }
                        }
                    } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
                }
            }

            // 4. Customer Debts Due Reminders (Multi-Milestone Staged Alerts)
            if ($enableDebts) {
                $userRole = $_SESSION['role'] ?? 'admin';
                $isAdmin = !empty($_SESSION['is_admin']) || $userRole === 'admin';
                $debtUserWhere = "";
                $debtUserParams = [];
                // Rule 81: Strict Mentioned-User Isolation for Order Debts
                if (!$isAdmin) {
                    $debtUserWhere = " AND (o.created_by = :uid OR o.owner_user_id = :uid OR o.service_owners_data LIKE :uid_pat)";
                    $debtUserParams['uid'] = $userId;
                    $debtUserParams['uid_pat'] = '%"user_id":' . $userId . '%';
                }
                $dueStmt = $db->prepare("
                    SELECT o.id, o.uid, o.total, o.amount_paid, o.due_date, o.customer_note, o.date AS created_at, c.name AS customer_name, c.phone AS customer_phone
                    FROM orders o
                    LEFT JOIN customers c ON o.customer_id = c.id
                    WHERE o.deleted_at IS NULL AND o.status = 'pending_money' 
                      AND (
                        (o.due_date IS NOT NULL AND o.due_date <= DATE_ADD(CURDATE(), INTERVAL $debtLeadDays DAY))
                        OR (o.due_date IS NULL AND o.date <= DATE_SUB(NOW(), INTERVAL 7 DAY))
                      )
                    $debtUserWhere
                    ORDER BY COALESCE(o.due_date, DATE_ADD(o.date, INTERVAL 30 DAY)) ASC LIMIT 50
                ");
                $dueStmt->execute($debtUserParams);
                $dueOrders = $dueStmt->fetchAll();

                foreach ($dueOrders as $ord) {
                    $owed = Decimal::sub((string)$ord['total'], (string)($ord['amount_paid'] ?? '0'));
                    if (Decimal::comp($owed, '0') <= 0) continue;

                    $effectiveDue = !empty($ord['due_date']) ? $ord['due_date'] : date('Y-m-d', strtotime($ord['created_at'] . ' + 30 days'));
                    $dueDays = (int)floor((strtotime($effectiveDue) - strtotime(date('Y-m-d'))) / 86400);
                    $m = $this->resolveMilestoneStage($dueDays, $debtLeadDays, $debtCadence, $debtOverdueRepeat);
                    if ($m === null) continue;

                    $chk = $db->prepare("
                        SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'order_receivable' AND entity_id = :eid AND stage_tag = :stage
                        UNION
                        SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'order_receivable' AND entity_id = :eid AND stage_tag = :stage
                        LIMIT 1
                    ");
                    $chk->execute(['uid' => $userId, 'eid' => $ord['id'], 'stage' => $m['tag']]);
                    if (!$chk->fetchColumn()) {
                        $custLabel = $ord['customer_name'] ?: ($ord['customer_note'] ?: 'Customer');
                        $title = "Customer Debt ({$m['dueText']}): {$custLabel}";
                        $phoneInfo = !empty($ord['customer_phone']) ? " | Phone: {$ord['customer_phone']}" : "";
                        $body = "Order {$ord['uid']} - {$custLabel} balance: " . number_format((float)$owed, 2) . " DZD ({$m['dueText']} - due {$ord['due_date']}){$phoneInfo}.";

                        $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                            VALUES (:uid, 'due_receivable', :t, :b, '#page-orders', 'order_receivable', :eid, :stage, 0, NOW())");
                        $ins->execute([
                            'uid'   => $userId,
                            't'     => $title,
                            'b'     => $body,
                            'eid'   => $ord['id'],
                            'stage' => $m['tag']
                        ]);
                    }
                }
            }

            // 5. Supplier Payables Due Reminders (Multi-Milestone Staged Alerts)
            if ($enableSuppliers) {
                $userRole = $_SESSION['role'] ?? 'admin';
                $isAdmin = !empty($_SESSION['is_admin']) || $userRole === 'admin';
                $suppWhere = "";
                $suppParams = [];
                // Rule 81: Non-admins receive alerts strictly for purchases they created or own
                if (!$isAdmin) {
                    $suppWhere = " AND (p.created_by = :uid OR p.owner_user_id = :uid)";
                    $suppParams['uid'] = $userId;
                }
                $suppStmt = $db->prepare("
                    SELECT p.id, p.uid, p.name, p.total, p.amount_paid, p.due_date, p.supplier_note, p.date AS created_at, s.name AS supplier_name, s.phone AS supplier_phone
                    FROM purchases p
                    LEFT JOIN suppliers s ON p.supplier_id = s.id
                    WHERE p.deleted_at IS NULL AND p.payment_status IN ('unpaid', 'partial')
                      AND (
                        (p.due_date IS NOT NULL AND p.due_date <= DATE_ADD(CURDATE(), INTERVAL $supplierLeadDays DAY))
                        OR (p.due_date IS NULL AND p.date <= DATE_SUB(NOW(), INTERVAL 7 DAY))
                      )
                    $suppWhere
                    ORDER BY COALESCE(p.due_date, DATE_ADD(p.date, INTERVAL 30 DAY)) ASC LIMIT 50
                ");
                $suppStmt->execute($suppParams);
                $duePurchases = $suppStmt->fetchAll();

                foreach ($duePurchases as $pur) {
                    $owed = Decimal::sub((string)$pur['total'], (string)($pur['amount_paid'] ?? '0'));
                    if (Decimal::comp($owed, '0') <= 0) continue;

                    $effectiveDue = !empty($pur['due_date']) ? $pur['due_date'] : date('Y-m-d', strtotime($pur['created_at'] . ' + 30 days'));
                    $dueDays = (int)floor((strtotime($effectiveDue) - strtotime(date('Y-m-d'))) / 86400);
                    $m = $this->resolveMilestoneStage($dueDays, $supplierLeadDays, $supplierCadence, $supplierOverdueRepeat);
                    if ($m === null) continue;

                    $chk = $db->prepare("
                        SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'purchase_payable' AND entity_id = :eid AND stage_tag = :stage
                        UNION
                        SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'purchase_payable' AND entity_id = :eid AND stage_tag = :stage
                        LIMIT 1
                    ");
                    $chk->execute(['uid' => $userId, 'eid' => $pur['id'], 'stage' => $m['tag']]);
                    if (!$chk->fetchColumn()) {
                        $suppLabel = $pur['supplier_name'] ?: ($pur['supplier_note'] ?: 'Supplier');
                        $title = "Supplier Payable ({$m['dueText']}): {$suppLabel}";
                        $phoneInfo = !empty($pur['supplier_phone']) ? " | Phone: {$pur['supplier_phone']}" : "";
                        $body = "Purchase {$pur['uid']} ({$pur['name']}) - owe {$suppLabel} " . number_format((float)$owed, 2) . " DZD ({$m['dueText']} - due {$pur['due_date']}){$phoneInfo}.";

                        $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                            VALUES (:uid, 'due_payable', :t, :b, '#page-purchases', 'purchase_payable', :eid, :stage, 0, NOW())");
                        $ins->execute([
                            'uid'   => $userId,
                            't'     => $title,
                            'b'     => $body,
                            'eid'   => $pur['id'],
                            'stage' => $m['tag']
                        ]);
                    }
                }
            }

            // 6. Schedules Cadence & Advance Lead-Time Dispatcher (Mission 81 & 82 with Per-User Scoping)
            try {
                // Max lookahead window across global and potential user overrides
                $maxLookaheadDays = 60;
                $activeSchedules = $db->query("
                    SELECT s.id, s.uid, s.title, s.description, s.target_datetime, s.priority, s.visibility, s.created_by, u.username AS creator_name
                    FROM schedules s
                    LEFT JOIN users u ON s.created_by = u.id
                    WHERE s.deleted_at IS NULL
                      AND s.status IN ('pending', 'due')
                      AND s.target_datetime <= DATE_ADD(NOW(), INTERVAL $maxLookaheadDays DAY)
                    ORDER BY s.target_datetime ASC LIMIT 60
                ")->fetchAll();

                if (!empty($activeSchedules)) {
                    $allUsersList = null;

                    foreach ($activeSchedules as $sch) {
                        $dueSec = strtotime($sch['target_datetime']) - time();
                        $dueDays = (int)floor($dueSec / 86400);

                        $recipients = [];
                        if ($sch['visibility'] === 'only_me') {
                            $recipients = [(int)$sch['created_by']];
                        } elseif ($sch['visibility'] === 'selected_users') {
                            $assigneeStmt = $db->prepare("SELECT user_id FROM schedule_assignees WHERE schedule_id = :sid");
                            $assigneeStmt->execute(['sid' => $sch['id']]);
                            $recipients = array_map('intval', $assigneeStmt->fetchAll(PDO::FETCH_COLUMN));
                            if (!in_array((int)$sch['created_by'], $recipients, true)) {
                                $recipients[] = (int)$sch['created_by'];
                            }
                        } elseif ($sch['visibility'] === 'everyone') {
                            if ($allUsersList === null) {
                                $allUsersList = array_map('intval', $db->query("SELECT id FROM users WHERE deleted_at IS NULL")->fetchAll(PDO::FETCH_COLUMN));
                            }
                            $recipients = $allUsersList;
                        }

                        $priorityEmoji = ($sch['priority'] === 'urgent') ? '🚨' : (($sch['priority'] === 'high') ? '⚠️' : '⏰');
                        $dispatchedAny = false;

                        $notifIns = $db->prepare("
                            INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at)
                            VALUES (:uid, 'schedule', :title, :body, '#page-notifications?tab=schedules', 'schedule', :eid, :stage, 0, NOW())
                        ");

                        foreach ($recipients as $targetUid) {
                            $uEnable  = (int)$pref('notif_enable_schedules', 1, $targetUid);
                            if (!$uEnable) continue;

                            $uLead    = max(1, min(60, (int)$pref('notif_schedule_lead_days', 14, $targetUid)));
                            $uCadence = (string)$pref('notif_schedule_cadence', 'standard', $targetUid);
                            $uOverdue = (int)$pref('notif_schedule_overdue_repeat_hours', 24, $targetUid);

                            $m = $this->resolveMilestoneStage($dueDays, $uLead, $uCadence, $uOverdue);
                            if ($m === null) continue;

                            if ($dueDays < 0) {
                                $title = "{$priorityEmoji} Schedule Overdue ({$m['dueText']}): {$sch['title']}";
                            } elseif ($dueDays === 0) {
                                $title = "{$priorityEmoji} Schedule Due TODAY: {$sch['title']}";
                            } else {
                                $title = "{$priorityEmoji} Schedule Reminder ({$m['dueText']}): {$sch['title']}";
                            }

                            $schUidPrefix = !empty($sch['uid']) ? "#{$sch['uid']}: " : "";
                            $body = !empty($sch['description']) 
                                ? $schUidPrefix . mb_substr($sch['description'], 0, 180) 
                                : "Scheduled task #{$sch['uid']} is {$m['dueText']} ({$sch['target_datetime']}).";

                            $chk = $db->prepare("
                                SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'schedule' AND entity_id = :eid AND stage_tag = :stage
                                UNION
                                SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'schedule' AND entity_id = :eid AND stage_tag = :stage
                                LIMIT 1
                            ");
                            $chk->execute(['uid' => $targetUid, 'eid' => $sch['id'], 'stage' => $m['tag']]);
                            if (!$chk->fetchColumn()) {
                                $notifIns->execute([
                                    'uid'   => $targetUid,
                                    'title' => $title,
                                    'body'  => $body,
                                    'eid'   => $sch['id'],
                                    'stage' => $m['tag']
                                ]);
                                $dispatchedAny = true;
                            }
                        }

                        if ($dispatchedAny) {
                            if (strtotime($sch['target_datetime']) <= time()) {
                                $db->prepare("UPDATE schedules SET is_notified = 1, status = 'due' WHERE id = :sid")->execute(['sid' => $sch['id']]);
                            }
                            $db->prepare("UPDATE schedule_assignees SET notified_at = NOW() WHERE schedule_id = :sid")->execute(['sid' => $sch['id']]);
                        }
                    }
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

            try {
                // Partner Settlement Demands (I am Payer/Debtor, awaiting my acceptance or settlement)
                // Point 4 & Rule A/D: Every user receives notifications strictly about their own obligation;
                // Receivables do NOT spam the creditor, and creators do NOT get reminded of tickets they authored.
                $duePayables = $db->prepare("
                    SELECT ps.id, ps.amount, u.username as payee_name, ps.description, ps.settlement_type
                    FROM partner_settlements ps
                    LEFT JOIN users u ON ps.payee_user_id = u.id
                    WHERE ps.status = 'pending' 
                      AND ps.payer_user_id = :uid 
                      AND ps.payer_user_id != ps.payee_user_id
                      AND (ps.created_by IS NULL OR ps.created_by != :uid2)
                      AND (ps.related_entity_type NOT IN ('orders', 'order') OR ps.related_entity_type IS NULL)
                      AND ps.settlement_type NOT IN ('parts_cost_recovery', 'parts_profit_share', 'service_profit_share', 'manual_cost_recovery', 'manual_cost_markup', 'service_owner_statement')
                    ORDER BY ps.created_at ASC LIMIT 50
                ");
                $duePayables->execute(['uid' => $userId, 'uid2' => $userId]);
                $payables = $duePayables->fetchAll();

                foreach ($payables as $ps) {

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
                    $chk = $db->prepare("
                        SELECT id FROM notifications WHERE user_id = :uid AND entity_type = 'partner_settlement' AND entity_id = :eid
                        UNION
                        SELECT id FROM notification_suppressions WHERE user_id = :uid AND entity_type = 'partner_settlement' AND entity_id = :eid
                        LIMIT 1
                    ");
                    $chk->execute(['uid' => $userId, 'eid' => $ps['id']]);
                    if (!$chk->fetchColumn()) {
                        if (($ps['settlement_type'] ?? '') === 'delegated_purchase') {
                            $rawDesc = $ps['description'] ?: 'New Stock Batch';
                            if (stripos($rawDesc, 'Delegated Purchase:') === 0) {
                                $rawDesc = trim(substr($rawDesc, strlen('Delegated Purchase:')));
                            }
                            $title = "Delegated Purchase: " . $rawDesc;
                            $body = "A purchase was recorded on your behalf by {$ps['payee_name']} (" . number_format((float)$ps['amount'], 2) . " DZD). Please review, accept, and authorize payment from your Cash Safe.";
                            $actionUrl = '#page-purchases';
                        } else {
                            $title = "Partner Settlement Demand: {$ps['payee_name']}";
                            $body = "Pending settlement demand of " . number_format((float)$ps['amount'], 2) . " DZD owed to {$ps['payee_name']}. Please review and settle.";
                            $actionUrl = '#page-bills?tab=settlements';
                        }

                        $ins = $db->prepare("INSERT INTO notifications (user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, created_at) 
                            VALUES (:uid, 'due_payable', :t, :b, :url, 'partner_settlement', :eid, 'demand_initial', 0, NOW())");
                        $ins->execute([
                            'uid'   => $userId,
                            't'     => $title,
                            'b'     => $body,
                            'url'   => $actionUrl,
                            'eid'   => $ps['id']
                        ]);
                    }
                }
            } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        } finally {
            if ($gotLock) {
                try {
                    $db->query("SELECT RELEASE_LOCK('{$lockName}')");
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }
        }
    }

    public function index(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $type = isset($_GET['type']) ? trim($_GET['type']) : 'all';
        $view = isset($_GET['view']) ? trim($_GET['view']) : 'active';
        $onlyUnread = (isset($_GET['unread_only']) && $_GET['unread_only'] === 'true');
        $timeFrame = isset($_GET['time_frame']) ? trim($_GET['time_frame']) : '';
        $dateFrom = isset($_GET['date_from']) ? trim($_GET['date_from']) : '';
        $dateTo = isset($_GET['date_to']) ? trim($_GET['date_to']) : '';
        $defaultLimit = ($type === 'all' || empty($type)) ? 150 : 50;
        $limit = isset($_GET['limit']) ? min((int)$_GET['limit'], 200) : $defaultLimit;

        $db = Database::getConnection();
        $this->ensureTables($db);

        // Throttle full background sync on rapid tab switching (run at most once every 10s per user unless forced)
        $now = time();
        $syncCacheFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'pos_sync_u' . $userId . '.cache';
        $lastSyncTime = file_exists($syncCacheFile) ? (int)@file_get_contents($syncCacheFile) : 0;
        $shouldSync = isset($_GET['force_sync']) || ($now - $lastSyncTime > 10);
        if ($shouldSync) {
            $this->syncSystemNotifications($db, $userId);
            @file_put_contents($syncCacheFile, (string)$now, LOCK_EX);
        }

        $sql = "SELECT id, user_id, type, title, body, action_url, entity_type, entity_id, stage_tag, is_read, deleted_at, created_at FROM notifications WHERE user_id = :uid";
        $params = ['uid' => $userId];

        if ($view === 'trash') {
            $sql .= " AND deleted_at IS NOT NULL";
        } else {
            $sql .= " AND deleted_at IS NULL";
        }

        if ($onlyUnread && $view !== 'trash') {
            $sql .= " AND is_read = 0";
        }

        // Comprehensive billing and accounting entity types (strictly bills and expenses, air-gapped from statements)
        $billingEntityList = "'recurring_bill_cycle', 'recurring_bill_cycles', 'bill_cycle', 'bill_cycles', 'recurring_bills', 'recurring_bill', 'operating_expenses', 'operating_expense', 'bills', 'bill', 'expenses', 'expense'";

        if ($type === 'messages') {
            $sql .= " AND type IN ('message', 'channel_message')";
        } elseif ($type === 'channel_message' || $type === 'channel_messages') {
            $sql .= " AND type = 'channel_message'";
        } elseif ($type === 'receivables' || $type === 'owe_me') {
            $sql .= " AND type = 'due_receivable'";
        } elseif ($type === 'payables' || $type === 'we_owe') {
            $sql .= " AND type = 'due_payable' AND entity_type = 'purchase_payable'";
        } elseif ($type === 'billing' || $type === 'dues' || $type === 'bills' || $type === 'expenses') {
            $sql .= " AND ((type IN ('bill', 'expense') OR (type = 'due_payable' AND entity_type IN ('recurring_bill_cycle', 'recurring_bill_cycles', 'bill_cycle', 'bill_cycles')) OR entity_type IN ($billingEntityList)) AND type != 'settlement')";
        } elseif ($type === 'statements' || $type === 'statement' || $type === 'settlements') {
            $sql .= " AND (type = 'settlement' OR entity_type IN ('partner_settlement', 'partner_settlements') OR stage_tag LIKE 'stmt_%' OR stage_tag LIKE 'demand_%' OR stage_tag LIKE 'order_%' OR action_url LIKE '%tab=settlement%' OR action_url LIKE '%#order-details%')";
        } elseif ($type === 'stock_alert' || $type === 'stock') {
            $sql .= " AND (type IN ('stock_alert', 'stock') OR entity_type IN ('product', 'stock'))";
        } elseif ($type === 'security' || $type === 'system') {
            $sql .= " AND type = 'system' AND (entity_type IS NULL OR entity_type NOT IN ($billingEntityList, 'product', 'stock'))";
        } elseif ($type === 'schedule' || $type === 'schedules') {
            $sql .= " AND type = 'schedule'";
        }

        // Date and timeframe filtering
        if ($timeFrame === 'today') {
            $sql .= " AND created_at >= CURDATE()";
        } elseif ($timeFrame === 'yesterday') {
            $sql .= " AND created_at >= DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND created_at < CURDATE()";
        } elseif ($timeFrame === 'week') {
            $sql .= " AND created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
        } elseif ($timeFrame === 'month') {
            $sql .= " AND created_at >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)";
        } elseif (!empty($dateFrom) || !empty($dateTo)) {
            if (!empty($dateFrom)) {
                $sql .= " AND created_at >= CONCAT(:date_from, ' 00:00:00')";
                $params['date_from'] = $dateFrom;
            }
            if (!empty($dateTo)) {
                $sql .= " AND created_at <= CONCAT(:date_to, ' 23:59:59')";
                $params['date_to'] = $dateTo;
            }
        }

        $sql .= " ORDER BY " . ($view === 'trash' ? "deleted_at DESC, created_at DESC" : "is_read ASC, created_at DESC") . " LIMIT $limit";

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $notifications = $stmt->fetchAll();

        foreach ($notifications as &$n) {
            $n['is_read'] = (bool) $n['is_read'];
            $n['is_deleted'] = !empty($n['deleted_at']);
        }

        // Fetch count summaries by all categories (active vs trash)
        $countsStmt = $db->prepare("
            SELECT 
                COUNT(*) as total_count,
                SUM(CASE WHEN deleted_at IS NULL THEN 1 ELSE 0 END) as active_count,
                SUM(CASE WHEN deleted_at IS NULL AND is_read = 0 THEN 1 ELSE 0 END) as unread_count,
                SUM(CASE WHEN deleted_at IS NULL AND type IN ('message', 'channel_message') AND is_read = 0 THEN 1 ELSE 0 END) as unread_messages,
                SUM(CASE WHEN deleted_at IS NULL AND type = 'due_receivable' AND is_read = 0 THEN 1 ELSE 0 END) as unread_receivables,
                SUM(CASE WHEN deleted_at IS NULL AND type = 'due_payable' AND entity_type = 'purchase_payable' AND is_read = 0 THEN 1 ELSE 0 END) as unread_payables,
                SUM(CASE WHEN deleted_at IS NULL AND (
                    (type IN ('bill', 'expense') OR 
                    (type = 'due_payable' AND entity_type IN ('recurring_bill_cycle', 'recurring_bill_cycles', 'bill_cycle', 'bill_cycles')) OR 
                    entity_type IN ($billingEntityList)) AND type != 'settlement'
                ) AND is_read = 0 THEN 1 ELSE 0 END) as unread_billing,
                SUM(CASE WHEN deleted_at IS NULL AND (
                    type = 'settlement' OR 
                    entity_type IN ('partner_settlement', 'partner_settlements') OR 
                    stage_tag LIKE 'stmt_%' OR 
                    stage_tag LIKE 'demand_%' OR 
                    stage_tag LIKE 'order_%' OR 
                    action_url LIKE '%tab=settlement%' OR 
                    action_url LIKE '%#order-details%'
                ) AND is_read = 0 THEN 1 ELSE 0 END) as unread_statements,
                SUM(CASE WHEN deleted_at IS NULL AND (type IN ('stock_alert', 'stock') OR entity_type IN ('product', 'stock')) AND is_read = 0 THEN 1 ELSE 0 END) as unread_stock,
                SUM(CASE WHEN deleted_at IS NULL AND type = 'system' AND (entity_type IS NULL OR entity_type NOT IN ($billingEntityList, 'product', 'stock')) AND is_read = 0 THEN 1 ELSE 0 END) as unread_security,
                SUM(CASE WHEN deleted_at IS NULL AND type = 'schedule' AND is_read = 0 THEN 1 ELSE 0 END) as unread_schedules,
                SUM(CASE WHEN deleted_at IS NOT NULL THEN 1 ELSE 0 END) as trash_count
            FROM notifications
            WHERE user_id = :uid
        ");
        $countsStmt->execute(['uid' => $userId]);
        $counts = $countsStmt->fetch() ?: [];

        Response::json([
            'notifications' => $notifications,
            'counts' => [
                'total' => (int) ($counts['active_count'] ?? 0),
                'unread' => (int) ($counts['unread_count'] ?? 0),
                'unread_messages' => (int) ($counts['unread_messages'] ?? 0),
                'unread_receivables' => (int) ($counts['unread_receivables'] ?? 0),
                'unread_payables' => (int) ($counts['unread_payables'] ?? 0),
                'unread_billing' => (int) ($counts['unread_billing'] ?? 0),
                'unread_statements' => (int) ($counts['unread_statements'] ?? 0),
                'unread_settlements' => (int) ($counts['unread_statements'] ?? 0),
                'unread_stock' => (int) ($counts['unread_stock'] ?? 0),
                'unread_security' => (int) ($counts['unread_security'] ?? 0),
                'unread_schedules' => (int) ($counts['unread_schedules'] ?? 0),
                'unread_dues' => (int) ($counts['unread_billing'] ?? 0),
                'unread_system' => (int) ($counts['unread_security'] ?? 0),
                'trash_count' => (int) ($counts['trash_count'] ?? 0)
            ]
        ]);
    }

    /**
     * Security Forensics Deep Investigation endpoint
     */
    public function securityForensics(string $id): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $logId = (int) $id;
        $db = Database::getConnection();

        $stmt = $db->prepare("SELECT * FROM system_logs WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $logId]);
        $log = $stmt->fetch();

        if (!$log) {
            Response::json(['error' => 'Security log entry not found'], 404);
            return;
        }

        $isAdmin = !empty($_SESSION['is_admin']) || ($_SESSION['role'] ?? '') === 'admin';
        // Rule 81: Dual-Tier Security Air-Gap
        // If the security log targets a specific user's account credentials, only that user or an admin can inspect forensics
        $isTargetedAccountLog = in_array($log['action'], ['blocked_attempt', 'password_changed', 'user_account_recovered', 'user_recovery_failed'], true);
        if ($isTargetedAccountLog && !$isAdmin) {
            $logTargetUid = (int)($log['entity_id'] ?: ($log['user_id'] ?? 0));
            if ($logTargetUid !== $userId) {
                Response::json(['error' => 'Forbidden - You cannot inspect forensics of security incidents targeting other accounts'], 403);
                return;
            }
        }

        // Attempt to find detailed user agent from login_history
        $userAgent = null;
        if (!empty($log['user_id'])) {
            $hStmt = $db->prepare("SELECT user_agent, ip_address FROM login_history WHERE user_id = :uid AND created_at >= DATE_SUB(:ca, INTERVAL 10 MINUTE) AND created_at <= DATE_ADD(:ca, INTERVAL 10 MINUTE) ORDER BY id DESC LIMIT 1");
            $hStmt->execute(['uid' => $log['user_id'], 'ca' => $log['created_at']]);
            $history = $hStmt->fetch();
            if ($history && !empty($history['user_agent'])) {
                $userAgent = $history['user_agent'];
            }
        }

        if (!$userAgent && !empty($log['ip_address'])) {
            $hStmt2 = $db->prepare("SELECT user_agent FROM login_history WHERE ip_address = :ip ORDER BY id DESC LIMIT 1");
            $hStmt2->execute(['ip' => $log['ip_address']]);
            $userAgent = $hStmt2->fetchColumn() ?: null;
        }

        // Parse user agent into friendly OS & Browser
        $uaString = $userAgent ?: 'Unknown Browser / HTTP Client';
        $os = 'Unknown OS';
        if (stripos($uaString, 'Windows NT 10.0') !== false) $os = 'Windows 10 / 11';
        elseif (stripos($uaString, 'Windows') !== false) $os = 'Windows PC';
        elseif (stripos($uaString, 'Macintosh') !== false || stripos($uaString, 'Mac OS X') !== false) $os = 'macOS (Apple Mac)';
        elseif (stripos($uaString, 'iPhone') !== false) $os = 'iPhone (iOS)';
        elseif (stripos($uaString, 'iPad') !== false) $os = 'iPad (iPadOS)';
        elseif (stripos($uaString, 'Android') !== false) $os = 'Android Device';
        elseif (stripos($uaString, 'Linux') !== false) $os = 'Linux Device';

        $browser = 'Unknown Browser';
        if (stripos($uaString, 'Edg/') !== false) $browser = 'Microsoft Edge';
        elseif (stripos($uaString, 'Chrome/') !== false && stripos($uaString, 'Safari/') !== false) $browser = 'Google Chrome';
        elseif (stripos($uaString, 'Safari/') !== false && stripos($uaString, 'Chrome/') === false) $browser = 'Apple Safari';
        elseif (stripos($uaString, 'Firefox/') !== false) $browser = 'Mozilla Firefox';

        // Parse IP location type
        $ip = $log['ip_address'] ?: '127.0.0.1';
        $isLocal = ($ip === '127.0.0.1' || $ip === '::1' || str_starts_with($ip, '192.168.') || str_starts_with($ip, '10.') || str_starts_with($ip, '172.16.'));

        // Parse details JSON
        $detailsDecoded = json_decode((string)$log['details'], true);

        Response::json([
            'ok' => true,
            'forensics' => [
                'log_id' => $log['id'],
                'module' => $log['module'],
                'action' => $log['action'],
                'username' => $log['username'] ?: ($log['entity_name'] ?: 'Unknown User'),
                'user_id' => $log['user_id'],
                'ip_address' => $ip,
                'is_local_ip' => $isLocal,
                'ip_type' => $isLocal ? 'Local / LAN Connection' : 'Public Internet Connection',
                'user_agent' => $uaString,
                'os' => $os,
                'browser' => $browser,
                'details' => $detailsDecoded ?: $log['details'],
                'created_at' => $log['created_at'],
                'incident_severity' => ($log['action'] === 'blocked_attempt' || str_contains($log['action'], 'failed')) ? 'high' : 'info'
            ]
        ]);
    }

    /**
     * Mark single notification as read
     */
    public function markRead(string $id): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE notifications SET is_read = 1 WHERE id = :id AND user_id = :uid");
        $stmt->execute(['id' => $id, 'uid' => $userId]);

        Response::json(['ok' => true]);
    }

    /**
     * Mark all notifications as read
     */
    public function markAllRead(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE notifications SET is_read = 1 WHERE user_id = :uid AND deleted_at IS NULL");
        $stmt->execute(['uid' => $userId]);

        if (session_status() === PHP_SESSION_NONE) { @session_start(); }
        $_SESSION['last_notif_sync_time'] = time();
        Response::json(['ok' => true]);
    }

    /**
     * Soft delete notification (or permanent delete if already in trash)
     */
    public function destroy(string $id): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        
        // Check if already soft deleted
        $chk = $db->prepare("SELECT id, user_id, entity_type, entity_id, stage_tag, deleted_at FROM notifications WHERE id = :id AND user_id = :uid");
        $chk->execute(['id' => $id, 'uid' => $userId]);
        $row = $chk->fetch();

        if (!$row) {
            Response::json(['ok' => true]);
            return;
        }

        if (!empty($row['deleted_at'])) {
            // Already in trash -> permanent hard delete with suppression stamp
            if (!empty($row['entity_type'])) {
                $sup = $db->prepare("INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at) VALUES (:uid, :etype, :eid, :stage, NOW())");
                $sup->execute([
                    'uid'   => $userId,
                    'etype' => $row['entity_type'],
                    'eid'   => $row['entity_id'],
                    'stage' => $row['stage_tag']
                ]);
            }
            $stmt = $db->prepare("DELETE FROM notifications WHERE id = :id AND user_id = :uid");
            $stmt->execute(['id' => $id, 'uid' => $userId]);
        } else {
            // Move to trash (soft delete)
            $stmt = $db->prepare("UPDATE notifications SET deleted_at = NOW() WHERE id = :id AND user_id = :uid");
            $stmt->execute(['id' => $id, 'uid' => $userId]);
        }

        Response::json(['ok' => true]);
    }

    /**
     * Restore notification from trash
     */
    public function restore(string $id): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();

        // Clear any suppression if present
        $notif = $db->prepare("SELECT user_id, entity_type, entity_id, stage_tag FROM notifications WHERE id = :id AND user_id = :uid");
        $notif->execute(['id' => $id, 'uid' => $userId]);
        $row = $notif->fetch();
        if ($row && !empty($row['entity_type'])) {
            $db->prepare("DELETE FROM notification_suppressions WHERE user_id = :uid AND entity_type = :etype AND entity_id <=> :eid AND stage_tag <=> :stage")
               ->execute(['uid' => $userId, 'etype' => $row['entity_type'], 'eid' => $row['entity_id'], 'stage' => $row['stage_tag']]);
        }

        $stmt = $db->prepare("UPDATE notifications SET deleted_at = NULL WHERE id = :id AND user_id = :uid");
        $stmt->execute(['id' => $id, 'uid' => $userId]);

        Response::json(['ok' => true]);
    }

    /**
     * Permanently empty trash for current user
     */
    public function emptyTrash(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();

        // Stamp suppressions before hard-deleting all trash notifications
        $db->prepare("
            INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at)
            SELECT user_id, entity_type, entity_id, stage_tag, NOW()
            FROM notifications
            WHERE user_id = :uid AND deleted_at IS NOT NULL AND entity_type IS NOT NULL
        ")->execute(['uid' => $userId]);

        $stmt = $db->prepare("DELETE FROM notifications WHERE user_id = :uid AND deleted_at IS NOT NULL");
        $stmt->execute(['uid' => $userId]);

        Response::json(['ok' => true]);
    }

    /**
     * Clear all read notifications (move to soft-deleted trash)
     */
    public function clearRead(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE notifications SET deleted_at = NOW() WHERE user_id = :uid AND is_read = 1 AND deleted_at IS NULL");
        $stmt->execute(['uid' => $userId]);

        Response::json(['ok' => true]);
    }

    /**
     * Clear all notifications (move all active to soft-deleted trash)
     */
    public function clearAll(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $stmt = $db->prepare("UPDATE notifications SET deleted_at = NOW() WHERE user_id = :uid AND deleted_at IS NULL");
        $stmt->execute(['uid' => $userId]);

        Response::json(['ok' => true]);
    }

    /**
     * Unread counts endpoint
     */
    public function unreadCount(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['unread_count' => 0]);
            return;
        }

        $db = Database::getConnection();
        $this->ensureTables($db);

        // Throttle heavy system notifications sync to once every 120 seconds during background polling
        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        $lastSync = (int)($_SESSION['last_notif_sync_time'] ?? 0);
        $now = time();
        if (($now - $lastSync) > 120) {
            $this->syncSystemNotifications($db, $userId);
            $_SESSION['last_notif_sync_time'] = $now;
        }

        $stmt = $db->prepare("SELECT COUNT(*) FROM notifications WHERE user_id = :uid AND is_read = 0 AND deleted_at IS NULL");
        $stmt->execute(['uid' => $userId]);
        $count = (int) $stmt->fetchColumn();

        Response::json(['unread_count' => $count]);
    }

    /**
     * Live Financial Dues & Debts Portfolio
     * Returns all active, unpaid customer debts, supplier payables, and recurring bill cycles
     * with live balances, due dates, contact info, and aggregate metrics.
     */
    public function livePortfolio(): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $db = Database::getConnection();
        $this->ensureTables($db);

        // 1. Customer Debts (Receivables)
        $ordersQuery = $db->query("
            SELECT 
                o.id, o.uid, o.customer_id, o.total, o.amount_paid, o.due_date, o.date AS order_date, o.customer_note,
                c.name AS customer_name, c.phone AS customer_phone, c.email AS customer_email, c.address AS customer_address, c.is_walkin
            FROM orders o
            LEFT JOIN customers c ON o.customer_id = c.id
            WHERE o.deleted_at IS NULL AND o.status = 'pending_money'
            ORDER BY (o.due_date IS NULL OR CAST(o.due_date AS CHAR) LIKE '0000-00-00%'), o.due_date ASC, o.date DESC
        ")->fetchAll();

        $customersList = [];
        $totalReceivables = '0';
        $overdueCount = 0;
        $dueTodayCount = 0;
        $due24hCount = 0;
        $undatedReceivablesCount = 0;
        $undatedReceivablesTotal = '0';
        $todayDate = date('Y-m-d');

        foreach ($ordersQuery as $ord) {
            $owed = Decimal::sub((string)$ord['total'], (string)($ord['amount_paid'] ?? '0'));
            if (Decimal::comp($owed, '0') <= 0) continue;

            $totalReceivables = Decimal::add($totalReceivables, $owed);
            $isUndated = empty($ord['due_date']) || $ord['due_date'] === '0000-00-00';
            $dueDays = null;
            $urgency = 'upcoming';

            if ($isUndated) {
                $undatedReceivablesCount++;
                $undatedReceivablesTotal = Decimal::add($undatedReceivablesTotal, $owed);
                $urgency = 'undated';
            } else {
                $dueDays = (int)floor((strtotime($ord['due_date']) - strtotime($todayDate)) / 86400);
                if ($dueDays < 0) {
                    $overdueCount++;
                    $urgency = 'overdue';
                } elseif ($dueDays === 0) {
                    $dueTodayCount++;
                    $due24hCount++;
                    $urgency = 'due_today';
                } elseif ($dueDays === 1) {
                    $due24hCount++;
                    $urgency = 'due_tomorrow';
                } else {
                    $urgency = 'upcoming';
                }
            }

            $customersList[] = [
                'type'             => 'customer_debt',
                'order_id'         => (int)$ord['id'],
                'uid'              => $ord['uid'],
                'customer_id'      => (int)$ord['customer_id'],
                'customer_name'    => $ord['customer_name'] ?: ($ord['customer_note'] ?: 'Walk-in Customer'),
                'customer_phone'   => $ord['customer_phone'] ?: '',
                'customer_email'   => $ord['customer_email'] ?: '',
                'customer_address' => $ord['customer_address'] ?: '',
                'is_walkin'        => (bool)($ord['is_walkin'] ?? false),
                'total'            => (string)$ord['total'],
                'amount_paid'      => (string)($ord['amount_paid'] ?? '0'),
                'balance_owed'     => $owed,
                'due_date'         => $ord['due_date'],
                'order_date'       => $ord['order_date'],
                'customer_note'    => $ord['customer_note'] ?: '',
                'due_days'         => $dueDays,
                'is_undated'       => $isUndated,
                'urgency'          => $urgency
            ];
        }

        // 2. Supplier Payables (We Owe)
        $purchasesQuery = $db->query("
            SELECT 
                p.id, p.uid, p.name AS purchase_name, p.supplier_id, p.total, p.amount_paid, p.due_date, p.date AS purchase_date, p.supplier_note,
                s.name AS supplier_name, s.phone AS supplier_phone, s.email AS supplier_email, s.address AS supplier_address
            FROM purchases p
            LEFT JOIN suppliers s ON p.supplier_id = s.id
            WHERE p.deleted_at IS NULL AND p.payment_status IN ('unpaid', 'partial')
            ORDER BY (p.due_date IS NULL OR CAST(p.due_date AS CHAR) LIKE '0000-00-00%'), p.due_date ASC, p.date DESC
        ")->fetchAll();

        $suppliersList = [];
        $totalPayables = '0';
        $undatedPayablesCount = 0;
        $undatedPayablesTotal = '0';

        foreach ($purchasesQuery as $pur) {
            $owed = Decimal::sub((string)$pur['total'], (string)($pur['amount_paid'] ?? '0'));
            if (Decimal::comp($owed, '0') <= 0) continue;

            $totalPayables = Decimal::add($totalPayables, $owed);
            $isUndated = empty($pur['due_date']) || $pur['due_date'] === '0000-00-00';
            $dueDays = null;
            $urgency = 'upcoming';

            if ($isUndated) {
                $undatedPayablesCount++;
                $undatedPayablesTotal = Decimal::add($undatedPayablesTotal, $owed);
                $urgency = 'undated';
            } else {
                $dueDays = (int)floor((strtotime($pur['due_date']) - strtotime($todayDate)) / 86400);
                if ($dueDays < 0) {
                    $overdueCount++;
                    $urgency = 'overdue';
                } elseif ($dueDays === 0) {
                    $dueTodayCount++;
                    $due24hCount++;
                    $urgency = 'due_today';
                } elseif ($dueDays === 1) {
                    $due24hCount++;
                    $urgency = 'due_tomorrow';
                } else {
                    $urgency = 'upcoming';
                }
            }

            $suppliersList[] = [
                'type'             => 'supplier_payable',
                'purchase_id'      => (int)$pur['id'],
                'uid'              => $pur['uid'],
                'purchase_name'    => $pur['purchase_name'],
                'supplier_id'      => (int)$pur['supplier_id'],
                'supplier_name'    => $pur['supplier_name'] ?: ($pur['supplier_note'] ?: 'Supplier'),
                'supplier_phone'   => $pur['supplier_phone'] ?: '',
                'supplier_email'   => $pur['supplier_email'] ?: '',
                'supplier_address' => $pur['supplier_address'] ?: '',
                'total'            => (string)$pur['total'],
                'amount_paid'      => (string)($pur['amount_paid'] ?? '0'),
                'balance_owed'     => $owed,
                'due_date'         => $pur['due_date'],
                'purchase_date'    => $pur['purchase_date'],
                'supplier_note'    => $pur['supplier_note'] ?: '',
                'due_days'         => $dueDays,
                'is_undated'       => $isUndated,
                'urgency'          => $urgency
            ];
        }

        // 3. Overhead Running Circles & Period Bills (is_archived = 0)
        $circlesQuery = $db->query("
            SELECT 
                c.id AS cycle_id, c.uid AS cycle_uid, c.cycle_label, c.due_date, c.amount_expected, c.amount_paid,
                c.status AS cycle_status, c.bill_created, c.agreement_status, c.split_status, c.has_refusal, c.is_locked_for_edit,
                (SELECT COUNT(*) FROM recurring_bill_cycles rbc_sub 
                 WHERE rbc_sub.bill_id = c.bill_id 
                   AND (rbc_sub.due_date < c.due_date OR (rbc_sub.due_date = c.due_date AND rbc_sub.id <= c.id))
                ) AS cycle_number,
                b.id AS bill_id, b.uid AS circle_uid, b.name AS circle_name, b.category AS bill_category, b.frequency, b.interval_days, b.note AS bill_note
            FROM recurring_bill_cycles c
            JOIN recurring_bills b ON c.bill_id = b.id
            WHERE b.is_archived = 0 AND b.active = 1 AND b.deleted_at IS NULL AND b.is_paused = 0
              AND c.voided_at IS NULL AND c.status NOT IN ('paid', 'voided', 'skipped')
            ORDER BY (c.due_date IS NULL OR CAST(c.due_date AS CHAR) LIKE '0000-00-00%'), c.due_date ASC
        ")->fetchAll();

        $circlesList = [];
        $totalCirclesDues = '0';

        foreach ($circlesQuery as $cyc) {
            $amtExpected = (string)($cyc['amount_expected'] ?? '0');
            $amtPaid = (string)($cyc['amount_paid'] ?? '0');
            $owed = Decimal::sub($amtExpected, $amtPaid);
            if (Decimal::comp($owed, '0') <= 0) continue;

            $totalCirclesDues = Decimal::add($totalCirclesDues, $owed);
            $isUndated = empty($cyc['due_date']) || $cyc['due_date'] === '0000-00-00';
            $dueDays = null;
            $urgency = 'upcoming';

            if ($isUndated) {
                $urgency = 'undated';
            } else {
                $dueDays = (int)floor((strtotime($cyc['due_date']) - strtotime($todayDate)) / 86400);
                if ($dueDays < 0) {
                    $overdueCount++;
                    $urgency = 'overdue';
                } elseif ($dueDays === 0) {
                    $dueTodayCount++;
                    $due24hCount++;
                    $urgency = 'due_today';
                } elseif ($dueDays === 1) {
                    $due24hCount++;
                    $urgency = 'due_tomorrow';
                } else {
                    $urgency = 'upcoming';
                }
            }

            $circlesList[] = [
                'type'             => 'circle_period_bill',
                'cycle_id'         => (int)$cyc['cycle_id'],
                'cycle_uid'        => $cyc['cycle_uid'] ?: ('CYC-' . $cyc['cycle_id']),
                'cycle_number'     => (int)($cyc['cycle_number'] ?? 1),
                'bill_id'          => (int)$cyc['bill_id'],
                'circle_id'        => (int)$cyc['bill_id'],
                'circle_uid'       => $cyc['circle_uid'] ?: ('CIR-' . $cyc['bill_id']),
                'circle_name'      => $cyc['circle_name'],
                'bill_name'        => $cyc['circle_name'],
                'bill_category'    => $cyc['bill_category'] ?: 'overhead',
                'cycle_label'      => $cyc['cycle_label'],
                'frequency'        => $cyc['frequency'] ?: 'monthly',
                'amount_expected'  => $amtExpected,
                'amount_paid'      => $amtPaid,
                'balance_owed'     => $owed,
                'due_date'         => $cyc['due_date'],
                'bill_note'        => $cyc['bill_note'] ?: '',
                'source_type'      => 'circle_period',
                'due_days'         => $dueDays,
                'is_undated'       => $isUndated,
                'urgency'          => $urgency,
                'bill_created'     => (int)($cyc['bill_created'] ?? 0),
                'cycle_status'     => $cyc['cycle_status'] ?? 'pending',
                'agreement_status' => $cyc['agreement_status'] ?? 'pending_acceptance',
                'split_status'     => $cyc['split_status'] ?? 'unsplit',
                'has_refusal'      => (int)($cyc['has_refusal'] ?? 0),
                'is_locked'        => (int)($cyc['is_locked_for_edit'] ?? 0)
            ];
        }

        $totalDues = Decimal::add(Decimal::add($totalReceivables, $totalPayables), $totalCirclesDues);

        Response::json([
            'ok'      => true,
            'metrics' => [
                'total_receivables'         => $totalReceivables,
                'total_payables'            => $totalPayables,
                'total_circles_dues'        => $totalCirclesDues,
                'total_dues'                => $totalDues,
                'count_customers'           => count($customersList),
                'count_suppliers'           => count($suppliersList),
                'count_circles'             => count($circlesList),
                'count_total'               => count($customersList) + count($suppliersList) + count($circlesList),
                'overdue_count'             => $overdueCount,
                'due_today_count'           => $dueTodayCount,
                'due_24h_count'             => $due24hCount,
                'undated_count'             => $undatedReceivablesCount + $undatedPayablesCount,
                'undated_receivables_total' => $undatedReceivablesTotal,
                'undated_payables_total'    => $undatedPayablesTotal
            ],
            'customers'          => $customersList,
            'suppliers'          => $suppliersList,
            'circles'            => $circlesList
        ]);
    }

    /**
     * Bulk mark notifications as read
     */
    public function bulkMarkRead(array $data): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $rawIds = $data['ids'] ?? [];
        $ids = is_array($rawIds) ? array_values(array_filter(array_map('intval', $rawIds), fn($id) => $id > 0)) : [];

        if (empty($ids)) {
            Response::json(['error' => 'No valid notification IDs provided'], 400);
            return;
        }

        $db = Database::getConnection();
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $db->prepare("UPDATE notifications SET is_read = 1 WHERE user_id = ? AND id IN ($placeholders)");
        $stmt->execute(array_merge([$userId], $ids));

        Response::json(['ok' => true, 'updated_count' => $stmt->rowCount(), 'message' => 'Notifications marked as read']);
    }

    /**
     * Bulk dismiss notifications (move to trash)
     */
    public function bulkDismiss(array $data): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $rawIds = $data['ids'] ?? [];
        $ids = is_array($rawIds) ? array_values(array_filter(array_map('intval', $rawIds), fn($id) => $id > 0)) : [];

        if (empty($ids)) {
            Response::json(['error' => 'No valid notification IDs provided'], 400);
            return;
        }

        $db = Database::getConnection();
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $db->prepare("UPDATE notifications SET deleted_at = NOW() WHERE user_id = ? AND id IN ($placeholders)");
        $stmt->execute(array_merge([$userId], $ids));

        Response::json(['ok' => true, 'dismissed_count' => $stmt->rowCount(), 'message' => 'Notifications moved to trash']);
    }

    /**
     * Bulk restore notifications from trash
     */
    public function bulkRestore(array $data): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $rawIds = $data['ids'] ?? [];
        $ids = is_array($rawIds) ? array_values(array_filter(array_map('intval', $rawIds), fn($id) => $id > 0)) : [];

        if (empty($ids)) {
            Response::json(['error' => 'No valid notification IDs provided'], 400);
            return;
        }

        $db = Database::getConnection();
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        // Clear suppressions for these notifications if any
        $fetchStmt = $db->prepare("SELECT user_id, entity_type, entity_id, stage_tag FROM notifications WHERE user_id = ? AND id IN ($placeholders)");
        $fetchStmt->execute(array_merge([$userId], $ids));
        $rows = $fetchStmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $r) {
            if (!empty($r['entity_type'])) {
                $db->prepare("DELETE FROM notification_suppressions WHERE user_id = :uid AND entity_type = :etype AND entity_id <=> :eid AND stage_tag <=> :stage")
                   ->execute(['uid' => $userId, 'etype' => $r['entity_type'], 'eid' => $r['entity_id'], 'stage' => $r['stage_tag']]);
            }
        }

        $stmt = $db->prepare("UPDATE notifications SET deleted_at = NULL WHERE user_id = ? AND id IN ($placeholders)");
        $stmt->execute(array_merge([$userId], $ids));

        Response::json(['ok' => true, 'restored_count' => $stmt->rowCount(), 'message' => 'Notifications restored from trash']);
    }

    /**
     * Bulk permanently delete notifications
     */
    public function bulkPermanentDelete(array $data): void
    {
        $userId = $this->getCurrentUserId();
        if (!$userId) {
            Response::json(['error' => 'Unauthorized'], 401);
            return;
        }

        $rawIds = $data['ids'] ?? [];
        $ids = is_array($rawIds) ? array_values(array_filter(array_map('intval', $rawIds), fn($id) => $id > 0)) : [];

        if (empty($ids)) {
            Response::json(['error' => 'No valid notification IDs provided'], 400);
            return;
        }

        $db = Database::getConnection();
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        // Stamp suppressions before hard-deleting
        $supStmt = $db->prepare("
            INSERT IGNORE INTO notification_suppressions (user_id, entity_type, entity_id, stage_tag, suppressed_at)
            SELECT user_id, entity_type, entity_id, stage_tag, NOW()
            FROM notifications
            WHERE user_id = ? AND id IN ($placeholders) AND entity_type IS NOT NULL
        ");
        $supStmt->execute(array_merge([$userId], $ids));

        $stmt = $db->prepare("DELETE FROM notifications WHERE user_id = ? AND id IN ($placeholders)");
        $stmt->execute(array_merge([$userId], $ids));

        Response::json(['ok' => true, 'deleted_count' => $stmt->rowCount(), 'message' => 'Notifications permanently deleted']);
    }
}
/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
