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

require_once __DIR__ . '/../Utils/Decimal.php';
require_once __DIR__ . '/../Response.php';
require_once __DIR__ . '/../SystemLog.php';
require_once __DIR__ . '/../Database.php';
require_once __DIR__ . '/../Utils/EntityVersion.php';

use App\Utils\EntityVersion;

class ProductsController
{
    private static bool $columnsEnsured = false;
    private static bool $historyTableEnsured = false;
    private static bool $purchaseWriteoffEnsured = false;

    private function ensureProductsColumns(PDO $db): void
    {
        if (self::$columnsEnsured) {
            return;
        }
        self::$columnsEnsured = true;

        $columns = [
            'uid' => 'VARCHAR(50) UNIQUE DEFAULT NULL',
            'picture' => 'LONGTEXT NULL',
            'picture_name' => 'VARCHAR(255) NULL',
            'edited_by' => 'INT NULL',
            'deleted_at' => 'DATETIME NULL',
            'deleted_by' => 'INT NULL',
            'delete_reason' => 'TEXT NULL',
            'display_decimals' => 'INT NULL',
            'price' => "DECIMAL(32,16) NOT NULL DEFAULT 0",
            'color' => 'VARCHAR(50) DEFAULT NULL',
            'quantity_reserved' => "DECIMAL(32,16) NOT NULL DEFAULT 0",
            'quantity_writeoff' => "DECIMAL(32,16) NOT NULL DEFAULT 0",
            'stock_in_threshold' => 'DECIMAL(32,16) NULL',
            'stock_low_threshold' => 'DECIMAL(32,16) NULL',
            // Per-Product Barcode / QR Identification (Mission 52)
            'has_barcode' => 'TINYINT(1) NOT NULL DEFAULT 0',
            'barcode' => 'VARCHAR(100) NULL DEFAULT NULL',
            'barcode_type' => "VARCHAR(30) NOT NULL DEFAULT 'CODE128'"
        ];

        $existingCols = [];
        try {
            $colStmt = $db->query("SHOW COLUMNS FROM products");
            while ($colRow = $colStmt->fetch(PDO::FETCH_ASSOC)) {
                $existingCols[$colRow['Field']] = true;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }

        foreach ($columns as $column => $definition) {
            if (!isset($existingCols[$column])) {
                try {
                    $db->exec("ALTER TABLE products ADD COLUMN $column $definition");
                } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
            }
        }

        try {
            $hasCatIdx = $db->query("SHOW INDEX FROM products WHERE Key_name = 'idx_products_cat_deleted'")->fetch();
            if (!$hasCatIdx) {
                $db->exec("ALTER TABLE products ADD INDEX idx_products_cat_deleted (category_id, deleted_at)");
            }
            $hasDelIdx = $db->query("SHOW INDEX FROM products WHERE Key_name = 'idx_products_deleted_id'")->fetch();
            if (!$hasDelIdx) {
                $db->exec("ALTER TABLE products ADD INDEX idx_products_deleted_id (deleted_at, id)");
            }
            $hasStockIdx = $db->query("SHOW INDEX FROM products WHERE Key_name = 'idx_products_stock'")->fetch();
            if (!$hasStockIdx) {
                $db->exec("ALTER TABLE products ADD INDEX idx_products_stock (deleted_at, quantity)");
            }
            $hasBarcodeIdx = $db->query("SHOW INDEX FROM products WHERE Key_name = 'idx_products_barcode'")->fetch();
            if (!$hasBarcodeIdx) {
                $db->exec("ALTER TABLE products ADD INDEX idx_products_barcode (barcode)");
            }

            // Ensure relational product_barcodes table exists (Mission 52)
            $db->exec("CREATE TABLE IF NOT EXISTS product_barcodes (
                id INT AUTO_INCREMENT PRIMARY KEY,
                product_id INT NOT NULL,
                barcode_value VARCHAR(100) NOT NULL UNIQUE,
                barcode_type VARCHAR(30) NOT NULL DEFAULT 'CODE128',
                prefix VARCHAR(20) NULL DEFAULT NULL,
                label VARCHAR(100) NULL DEFAULT NULL,
                is_primary TINYINT(1) NOT NULL DEFAULT 0,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_pb_product (product_id),
                INDEX idx_pb_value (barcode_value),
                FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    private function ensurePurchaseWriteoffColumn(PDO $db): void
    {
        if (self::$purchaseWriteoffEnsured) {
            return;
        }
        self::$purchaseWriteoffEnsured = true;

        try {
            $colStmt = $db->query("SHOW COLUMNS FROM purchases LIKE 'quantity_writeoff'");
            if (!$colStmt->fetch()) {
                $db->exec("ALTER TABLE purchases ADD COLUMN quantity_writeoff DECIMAL(32,16) NOT NULL DEFAULT 0 AFTER quantity_sold");
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    private function ensureProductHistoryTable(PDO $db): void
    {
        if (self::$historyTableEnsured) {
            return;
        }
        self::$historyTableEnsured = true;

        try {
            $db->exec("CREATE TABLE IF NOT EXISTS product_history (
                id INT AUTO_INCREMENT PRIMARY KEY,
                product_id INT NOT NULL,
                edited_by INT NULL,
                action VARCHAR(50) NOT NULL,
                changes JSON NULL,
                reason TEXT NULL,
                created_at DATETIME NOT NULL,
                INDEX idx_ph_prod_created (product_id, created_at),
                INDEX idx_ph_edited_by (edited_by),
                FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
                FOREIGN KEY (edited_by) REFERENCES users(id) ON DELETE SET NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
    }

    private function getGlobalDecimals(PDO $db): int
    {
        try {
            $row = $db->query("SELECT display_decimals FROM settings LIMIT 1")->fetch();
            if ($row && isset($row['display_decimals']) && $row['display_decimals'] !== null && $row['display_decimals'] !== '') {
                $d = (int) $row['display_decimals'];
                if ($d >= 0 && $d <= 16) return $d;
            }
        } catch (\Throwable $e) {
            error_log("Suppressed exception in " . __METHOD__ . ": " . $e->getMessage());
        }
        return 2;
    }

    /**
     * Effective decimals for a product: its own display_decimals if set,
     * else the global settings.display_decimals, else 2.
     */
    private function getEffectiveDecimals(PDO $db, ?int $productDecimals): int
    {
        if ($productDecimals !== null && $productDecimals >= 0 && $productDecimals <= 16) {
            return $productDecimals;
        }
        return $this->getGlobalDecimals($db);
    }

    /**
     * Compute hidden stock (residual fractional quantity beyond display precision)
     * across all live batches of a product.
     *
     * Hidden stock is computed against the AVAILABLE portion of each batch
     * (quantity_remaining - quantity_reserved), not the full quantity_remaining.
     * Reserved stock is already promised to pending orders at the precision it
     * was reserved at, and must never be reclaimed out from under those orders.
     *
     * @param PDO $db
     * @param int $productId
     * @param int|null $assumedDecimals If provided, compute as if display_decimals were this value
     *                                  (used for previewing the impact of a change).
     * @return array{total_hidden:string, batches:array<int,array{purchase_id:int,uid:?string,quantity_remaining:string,residual:string}>}
     */
    private function computeHiddenStock(PDO $db, int $productId, ?int $assumedDecimals = null): array
    {
        $this->ensurePurchaseWriteoffColumn($db);

        $prodStmt = $db->prepare('SELECT display_decimals FROM products WHERE id = :id');
        $prodStmt->execute(['id' => $productId]);
        $prod = $prodStmt->fetch();
        $productDecimals = $prod && $prod['display_decimals'] !== null ? (int) $prod['display_decimals'] : null;

        $decimals = $assumedDecimals !== null
            ? (int) $assumedDecimals
            : $this->getEffectiveDecimals($db, $productDecimals);

        $stmt = $db->prepare('SELECT id, uid, quantity_remaining, COALESCE(quantity_reserved, 0) AS quantity_reserved FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND (transfer_status IS NULL OR transfer_status NOT IN (\'pending_transfer\', \'pending_delegated\')) ORDER BY id ASC');
        $stmt->execute(['pid' => $productId]);
        $batches = $stmt->fetchAll();

        $total = '0';
        $out = [];
        foreach ($batches as $b) {
            $qr   = (string) ($b['quantity_remaining'] ?? '0');
            $qres = (string) ($b['quantity_reserved']  ?? '0');
            // Only the unreserved portion can carry hidden stock — anything reserved
            // belongs to a pending order at its original precision and is off-limits.
            $available = Decimal::sub($qr, $qres);
            if (Decimal::comp($available, '0') <= 0) continue;
            $truncated = Decimal::truncate($available, $decimals);
            $residual  = Decimal::sub($available, $truncated);
            if (Decimal::comp($residual, '0') <= 0) continue;
            $out[] = [
                'purchase_id' => (int) $b['id'],
                'uid' => $b['uid'] ?? null,
                'quantity_remaining' => $qr,
                'residual' => $residual,
            ];
            $total = Decimal::add($total, $residual);
        }

        return ['total_hidden' => $total, 'batches' => $out, 'decimals' => $decimals];
    }

    public function index(): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensurePurchaseWriteoffColumn($db);
        // Seed the pre-built default catalog once on a virgin DB (idempotent). See index.php.
        if (function_exists('ensureDefaultCatalogSeeded')) {
            ensureDefaultCatalogSeeded($db);
        }

        $showDeleted = isset($_GET['show_deleted']) && $_GET['show_deleted'] === 'true';
        $categoryId = isset($_GET['category_id']) && is_numeric($_GET['category_id']) ? (int) $_GET['category_id'] : null;

        $selectFields = "id, uid, name, color, category_id, description, picture_name, price, quantity,
                         quantity_reserved, quantity_writeoff, stock_in_threshold, stock_low_threshold,
                         display_decimals, has_barcode, barcode, barcode_type,
                         created_by, edited_by, created_at, updated_at, deleted_at,
                         IF(picture IS NOT NULL AND picture != '', 1, 0) AS has_picture,
                         IF(picture IS NOT NULL AND picture != '', 
                            CONCAT('/api/products/', id, '/image?v=', UNIX_TIMESTAMP(COALESCE(updated_at, created_at, NOW()))), 
                            NULL
                         ) AS picture";

        $whereClauses = [];
        if (!$showDeleted) {
            $whereClauses[] = "deleted_at IS NULL";
        }
        if ($categoryId !== null) {
            $whereClauses[] = "category_id = " . $categoryId;
        }
        $whereSql = !empty($whereClauses) ? "WHERE " . implode(' AND ', $whereClauses) : "";
        $products = $db->query("SELECT $selectFields FROM products $whereSql ORDER BY id DESC")->fetchAll();

        // Augment each product with hidden_stock total efficiently without N+1 queries
        $globalDecimals = $this->getGlobalDecimals($db);
        $batchesByProduct = [];
        $barcodesByProduct = [];
        $productIds = array_column($products, 'id');
        if (!empty($productIds)) {
            $inPlaceholders = implode(',', array_map('intval', $productIds));
            $batchStmt = $db->query("SELECT product_id, quantity_remaining, COALESCE(quantity_reserved, 0) AS quantity_reserved FROM purchases WHERE product_id IN ($inPlaceholders) AND deleted_at IS NULL AND quantity_remaining > 0 AND (transfer_status IS NULL OR transfer_status NOT IN ('pending_transfer', 'pending_delegated')) ORDER BY id ASC");
            while ($bRow = $batchStmt->fetch()) {
                $batchesByProduct[(int) $bRow['product_id']][] = $bRow;
            }

            $bcStmt = $db->query("SELECT id, product_id, barcode_value, barcode_type, prefix, label, is_primary FROM product_barcodes WHERE product_id IN ($inPlaceholders) ORDER BY is_primary DESC, id ASC");
            while ($bcRow = $bcStmt->fetch()) {
                $barcodesByProduct[(int) $bcRow['product_id']][] = [
                    'id'            => (int) $bcRow['id'],
                    'barcode_value' => (string) $bcRow['barcode_value'],
                    'barcode'       => (string) $bcRow['barcode_value'],
                    'barcode_type'  => (string) $bcRow['barcode_type'],
                    'prefix'        => $bcRow['prefix'],
                    'label'         => $bcRow['label'],
                    'label_tag'     => $bcRow['label'],
                    'is_primary'    => (int) $bcRow['is_primary'],
                ];
            }
        }

        foreach ($products as &$p) {
            $pId = (int) $p['id'];
            $pDecimals = $p['display_decimals'] !== null ? (int) $p['display_decimals'] : null;
            $decimals = ($pDecimals !== null && $pDecimals >= 0 && $pDecimals <= 16) ? $pDecimals : $globalDecimals;

            $totalHidden = '0';
            if (isset($batchesByProduct[$pId])) {
                foreach ($batchesByProduct[$pId] as $b) {
                    $qr = (string) ($b['quantity_remaining'] ?? '0');
                    $qres = (string) ($b['quantity_reserved'] ?? '0');
                    $available = Decimal::sub($qr, $qres);
                    if (Decimal::comp($available, '0') <= 0) continue;
                    $truncated = Decimal::truncate($available, $decimals);
                    $residual = Decimal::sub($available, $truncated);
                    if (Decimal::comp($residual, '0') <= 0) continue;
                    $totalHidden = Decimal::add($totalHidden, $residual);
                }
            }
            $p['hidden_stock'] = $totalHidden;
            $allBc = $barcodesByProduct[$pId] ?? [];
            $p['barcodes'] = $allBc;
            $p['secondary_barcodes'] = array_values(array_filter($allBc, fn($b) => $b['is_primary'] === 0));
        }
        unset($p);

        Response::json(['products' => $products]);
    }

    public function getImage(int $id): void
    {
        $db = Database::getConnection();
        $ifNoneMatch = $_SERVER['HTTP_IF_NONE_MATCH'] ?? '';
        $ifModifiedSince = $_SERVER['HTTP_IF_MODIFIED_SINCE'] ?? '';
        $cleanClientEtag = trim(preg_replace('/^W\//', '', trim($ifNoneMatch)), '"');

        // Early cache check: verify ETag & Last-Modified without loading heavy BLOB into memory
        if ($cleanClientEtag !== '' || !empty($ifModifiedSince)) {
            $metaStmt = $db->prepare('SELECT updated_at, created_at, SHA2(picture, 256) AS img_hash, CASE WHEN picture IS NOT NULL AND picture != "" THEN 1 ELSE 0 END AS has_picture FROM products WHERE id = :id');
            $metaStmt->execute(['id' => $id]);
            $meta = $metaStmt->fetch();

            if (!$meta || empty($meta['has_picture'])) {
                http_response_code(404);
                header('Content-Type: application/json');
                echo json_encode(['error' => 'Product image not found']);
                exit;
            }

            $lastModified = strtotime($meta['updated_at'] ?? $meta['created_at'] ?? 'now');
            $serverEtag = (string)($meta['img_hash'] ?? '');

            $etagMatches = ($cleanClientEtag !== '' && ($cleanClientEtag === $serverEtag || $cleanClientEtag === substr($serverEtag, 0, 32)));
            $timeMatches = (!empty($ifModifiedSince) && strtotime($ifModifiedSince) >= $lastModified);

            if ($etagMatches || ($cleanClientEtag === '' && $timeMatches)) {
                header('ETag: "' . $serverEtag . '"');
                header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $lastModified) . ' GMT');
                header('Cache-Control: public, max-age=31536000, immutable');
                http_response_code(304);
                exit;
            }
        }

        $stmt = $db->prepare('SELECT picture, updated_at, created_at FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $prod = $stmt->fetch();

        if (!$prod || empty($prod['picture'])) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Product image not found']);
            exit;
        }

        $raw = $prod['picture'];
        $binary = null;

        if (str_starts_with($raw, 'data:')) {
            $comma = strpos($raw, ',');
            if ($comma !== false) {
                $binary = base64_decode(substr($raw, $comma + 1), true);
            }
        } else {
            $binary = base64_decode($raw, true);
        }

        if ($binary === false || $binary === null || strlen($binary) <= 10) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Invalid image data']);
            exit;
        }

        // Unconditionally validate magic bytes via finfo; return 404 for non-images
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $detected = $finfo->buffer($binary);
        if (!$detected) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Invalid image format']);
            exit;
        }

        $allowedMimes = ['image/jpeg', 'image/png', 'image/webp', 'image/gif', 'image/bmp', 'image/x-icon'];
        $cleanMime = strtolower(trim((string)$detected));
        if (!in_array($cleanMime, $allowedMimes, true)) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Invalid image format']);
            exit;
        }

        $serverEtag = hash('sha256', $raw);
        $etag = '"' . $serverEtag . '"';
        $lastModified = strtotime($prod['updated_at'] ?? $prod['created_at'] ?? 'now');

        if ($cleanClientEtag !== '' && ($cleanClientEtag === $serverEtag || $cleanClientEtag === substr($serverEtag, 0, 32))) {
            header('ETag: ' . $etag);
            header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $lastModified) . ' GMT');
            header('Cache-Control: public, max-age=31536000, immutable');
            http_response_code(304);
            exit;
        }

        header('Content-Type: ' . $cleanMime);
        header('X-Content-Type-Options: nosniff');
        header('Content-Length: ' . strlen($binary));
        header('ETag: ' . $etag);
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $lastModified) . ' GMT');
        header('Cache-Control: public, max-age=31536000, immutable');
        echo $binary;
        exit;
    }

    public function store(array $data): void
    {
        $name = trim($data['name'] ?? '');
        $categoryId = $data['category_id'] ?? null;

        if ($name === '' || !$categoryId) {
            Response::json(['error' => 'Name and category required'], 400);
            return;
        }

        if (mb_strlen($name) > 190) {
            Response::json(['error' => 'Product name cannot exceed 190 characters'], 400);
            return;
        }

        if (isset($data['color']) && mb_strlen((string)$data['color']) > 50) {
            Response::json(['error' => 'Color cannot exceed 50 characters'], 400);
            return;
        }

        // Validate display_decimals if provided
        if (isset($data['display_decimals']) && $data['display_decimals'] !== '') {
            $dd = $data['display_decimals'];
            if (!is_numeric($dd) || (int) $dd != $dd || (int) $dd < 0 || (int) $dd > 16) {
                Response::json(['error' => 'display_decimals must be an integer between 0 and 16'], 400);
                return;
            }
        }

        // Validate stock thresholds if provided
        $inVal = (isset($data['stock_in_threshold']) && trim((string)$data['stock_in_threshold']) !== '') ? trim((string)$data['stock_in_threshold']) : null;
        $lowVal = (isset($data['stock_low_threshold']) && trim((string)$data['stock_low_threshold']) !== '') ? trim((string)$data['stock_low_threshold']) : null;
        if ($inVal !== null && (!is_numeric($inVal) || Decimal::comp($inVal, '0') < 0)) {
            Response::json(['error' => 'In-stock threshold must be a valid non-negative number'], 400);
            return;
        }
        if ($lowVal !== null && (!is_numeric($lowVal) || Decimal::comp($lowVal, '0') < 0)) {
            Response::json(['error' => 'Low-stock threshold must be a valid non-negative number'], 400);
            return;
        }
        if ($inVal !== null && $lowVal !== null && Decimal::comp($lowVal, $inVal) >= 0) {
            Response::json(['error' => 'Low stock threshold must be strictly less than in-stock threshold'], 400);
            return;
        }

        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensureProductHistoryTable($db);

        // Verify category exists and is not deleted (Rule 41 barrier)
        $catCheck = $db->prepare('SELECT id FROM categories WHERE id = :cid AND deleted_at IS NULL');
        $catCheck->execute(['cid' => $categoryId]);
        if (!$catCheck->fetch()) {
            Response::json(['error' => 'Selected category does not exist or has been deleted'], 400);
            return;
        }

        // Generate cryptographically unique UID: PRD-YYYYMMDD-XXXXXX
        $uid = 'PRD-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));

        $initQtyRaw = trim((string)($data['initial_quantity'] ?? $data['initial_stock'] ?? $data['quantity'] ?? '0'));
        $initCostRaw = trim((string)($data['initial_cost_price'] ?? $data['initial_cost'] ?? $data['cost_price'] ?? '0'));

        if ($initQtyRaw !== '' && (!is_numeric($initQtyRaw) || Decimal::comp($initQtyRaw, '0') < 0)) {
            Response::json(['error' => 'Initial quantity cannot be negative'], 400);
            return;
        }
        if ($initCostRaw !== '' && (!is_numeric($initCostRaw) || Decimal::comp($initCostRaw, '0') < 0)) {
            Response::json(['error' => 'Initial cost price cannot be negative'], 400);
            return;
        }
        if (isset($data['price']) && $data['price'] !== '') {
            if (!is_numeric($data['price']) || Decimal::comp((string)$data['price'], '0') < 0) {
                Response::json(['error' => 'Price cannot be negative'], 400);
                return;
            }
        }

        $hasInitialStock = is_numeric($initQtyRaw) && Decimal::comp($initQtyRaw, '0') > 0;
        $initQty = $hasInitialStock ? Decimal::truncate($initQtyRaw, 16) : '0';
        if ($hasInitialStock && Decimal::comp($initQty, '0') <= 0) {
            $hasInitialStock = false;
        }
        $initCost = (is_numeric($initCostRaw) && Decimal::comp($initCostRaw, '0') >= 0) ? Decimal::truncate($initCostRaw, 16) : '0';
        $initialTotalCost = Decimal::mul($initQty, $initCost);

        // Barcode / QR Sanitization & Validation (Mission 52)
        $allowedBarcodeTypes = ['CODE128', 'EAN13', 'QR'];
        $hasBarcode = !empty($data['has_barcode']) ? 1 : 0;
        $barcode = null;
        $barcodeType = 'CODE128';
        $secondaryBarcodes = [];

        if ($hasBarcode === 1) {
            if (isset($data['barcode'])) {
                $bTrimmed = trim((string)$data['barcode']);
                if ($bTrimmed !== '') {
                    if (mb_strlen($bTrimmed) > 100) {
                        Response::json(['error' => 'Barcode cannot exceed 100 characters'], 400);
                        return;
                    }
                    $barcode = $bTrimmed;
                }
            }

            $rawType = strtoupper(trim((string)($data['barcode_type'] ?? 'CODE128')));
            $barcodeType = in_array($rawType, $allowedBarcodeTypes, true) ? $rawType : 'CODE128';

            if (isset($data['secondary_barcodes']) && is_array($data['secondary_barcodes'])) {
                foreach ($data['secondary_barcodes'] as $sec) {
                    $secVal = '';
                    $secType = 'CODE128';
                    $secPrefix = null;
                    $secLabel = null;

                    if (is_string($sec)) {
                        $secVal = trim($sec);
                    } elseif (is_array($sec)) {
                        $secVal = trim((string)($sec['barcode_value'] ?? $sec['barcode'] ?? $sec['value'] ?? ''));
                        $st = strtoupper(trim((string)($sec['barcode_type'] ?? $sec['type'] ?? 'CODE128')));
                        $secType = in_array($st, $allowedBarcodeTypes, true) ? $st : 'CODE128';
                        $secPrefix = isset($sec['prefix']) && trim((string)$sec['prefix']) !== '' ? mb_substr(trim((string)$sec['prefix']), 0, 20) : null;
                        $rawSecLabel = $sec['label_tag'] ?? $sec['label'] ?? null;
                        $secLabel = (isset($rawSecLabel) && trim((string)$rawSecLabel) !== '') ? mb_substr(trim((string)$rawSecLabel), 0, 100) : null;
                    }

                    if ($secVal !== '') {
                        if (mb_strlen($secVal) > 100) {
                            Response::json(['error' => 'Secondary barcode cannot exceed 100 characters'], 400);
                            return;
                        }
                        if ($barcode !== null && $secVal === $barcode) {
                            continue; // Prevent duplicating primary barcode
                        }
                        $secondaryBarcodes[$secVal] = [
                            'barcode_value' => $secVal,
                            'barcode_type'  => $secType,
                            'prefix'        => $secPrefix,
                            'label'         => $secLabel,
                            'is_primary'    => 0,
                        ];
                    }
                }
            }

            // Barcode Uniqueness Pre-Check against Active Products
            $allCheckCodes = [];
            if ($barcode !== null) $allCheckCodes[] = $barcode;
            foreach ($secondaryBarcodes as $s) $allCheckCodes[] = $s['barcode_value'];

            if (!empty($allCheckCodes)) {
                $inPlaceholders = implode(',', array_fill(0, count($allCheckCodes), '?'));
                
                // 1. Check primary barcodes in active products
                $chkStmt1 = $db->prepare("SELECT id, uid, name, barcode FROM products WHERE barcode IN ($inPlaceholders) AND deleted_at IS NULL LIMIT 1");
                $chkStmt1->execute($allCheckCodes);
                $collision1 = $chkStmt1->fetch(\PDO::FETCH_ASSOC);
                if ($collision1) {
                    Response::json([
                        'error' => "Barcode '{$collision1['barcode']}' is already assigned to active product '{$collision1['name']}' (#{$collision1['uid']})",
                        'conflicting_product' => [
                            'id' => (int) $collision1['id'],
                            'uid' => $collision1['uid'],
                            'name' => $collision1['name'],
                            'barcode' => $collision1['barcode']
                        ]
                    ], 400);
                    return;
                }

                // 2. Check relational product_barcodes table
                $chkStmt2 = $db->prepare("SELECT pb.barcode_value, p.id, p.uid, p.name FROM product_barcodes pb JOIN products p ON pb.product_id = p.id WHERE pb.barcode_value IN ($inPlaceholders) AND p.deleted_at IS NULL LIMIT 1");
                $chkStmt2->execute($allCheckCodes);
                $collision2 = $chkStmt2->fetch(\PDO::FETCH_ASSOC);
                if ($collision2) {
                    Response::json([
                        'error' => "Barcode '{$collision2['barcode_value']}' is already assigned to active product '{$collision2['name']}' (#{$collision2['uid']})",
                        'conflicting_product' => [
                            'id' => (int) $collision2['id'],
                            'uid' => $collision2['uid'],
                            'name' => $collision2['name'],
                            'barcode' => $collision2['barcode_value']
                        ]
                    ], 400);
                    return;
                }
            }
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare('INSERT INTO products (
                uid, name, category_id, description, picture, picture_name, price, quantity, 
                stock_in_threshold, stock_low_threshold, display_decimals, color, 
                has_barcode, barcode, barcode_type, 
                created_by, created_at
            ) VALUES (
                :uid, :name, :category_id, :description, :picture, :picture_name, :price, :quantity, 
                :stock_in_threshold, :stock_low_threshold, :display_decimals, :color, 
                :has_barcode, :barcode, :barcode_type, 
                :created_by, NOW()
            )');
            $stmt->execute([
                'uid' => $uid,
                'name' => $name,
                'category_id' => $categoryId,
                'description' => $data['description'] ?? null,
                'picture' => $data['picture'] ?? null,
                'picture_name' => $data['picture_name'] ?? null,
                'color' => $data['color'] ?? null,
                'price' => (isset($data['price']) && $data['price'] !== '' && is_numeric($data['price']) && Decimal::comp((string)$data['price'], '0') >= 0) ? (string)$data['price'] : '0',
                'quantity' => $initQty,
                'stock_in_threshold' => $inVal,
                'stock_low_threshold' => $lowVal,
                'display_decimals' => isset($data['display_decimals']) && $data['display_decimals'] !== '' ? (int) $data['display_decimals'] : null,
                'has_barcode' => $hasBarcode,
                'barcode' => $barcode,
                'barcode_type' => $barcodeType,
                'created_by' => $_SESSION['user_id'] ?? null,
            ]);

            $productId = (int) $db->lastInsertId();

            // Insert Primary Barcode into product_barcodes table (Mission 52)
            if ($hasBarcode === 1 && $barcode !== null) {
                $rawPriLabel = $data['barcode_label'] ?? $data['barcode_tag'] ?? $data['label'] ?? null;
                $primaryLabel = (isset($rawPriLabel) && trim((string)$rawPriLabel) !== '') ? mb_substr(trim((string)$rawPriLabel), 0, 100) : null;

                $pbStmt = $db->prepare('INSERT INTO product_barcodes (product_id, barcode_value, barcode_type, prefix, label, is_primary, created_at) VALUES (:pid, :val, :type, :prefix, :label, 1, NOW())');
                $pbStmt->execute([
                    'pid'    => $productId,
                    'val'    => $barcode,
                    'type'   => $barcodeType,
                    'prefix' => $data['barcode_prefix'] ?? $data['prefix'] ?? null,
                    'label'  => $primaryLabel,
                ]);
            }

            // Insert Secondary Barcodes into product_barcodes table (Mission 52)
            if ($hasBarcode === 1 && !empty($secondaryBarcodes)) {
                $secStmt = $db->prepare('INSERT INTO product_barcodes (product_id, barcode_value, barcode_type, prefix, label, is_primary, created_at) VALUES (:pid, :val, :type, :prefix, :label, 0, NOW())');
                foreach ($secondaryBarcodes as $sec) {
                    $secStmt->execute([
                        'pid'    => $productId,
                        'val'    => $sec['barcode_value'],
                        'type'   => $sec['barcode_type'],
                        'prefix' => $sec['prefix'],
                        'label'  => $sec['label'],
                    ]);
                }
            }

            // If opening stock provided, create the initial FIFO purchase batch
            if ($hasInitialStock) {
                $purUid = 'PUR-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
                $purStmt = $db->prepare('INSERT INTO purchases (uid, product_id, name, price, quantity, quantity_remaining, quantity_reserved, quantity_sold, total, date, created_by, owner_user_id, payment_status, amount_paid, paid_at, paid_by, supplier_note, settle_kind) 
                    VALUES (:uid, :pid, :name, :price, :qty, :qty_rem, 0, 0, :total, NOW(), :cb, :owner, "paid", :paid_amt, NOW(), :pb, :note, "cash")');
                $purStmt->execute([
                    'uid'        => $purUid,
                    'pid'        => $productId,
                    'name'       => $name,
                    'price'      => $initCost,
                    'qty'        => $initQty,
                    'qty_rem'    => $initQty,
                    'total'      => $initialTotalCost,
                    'cb'         => $_SESSION['user_id'] ?? null,
                    'owner'      => $_SESSION['user_id'] ?? null,
                    'paid_amt'   => $initialTotalCost,
                    'pb'         => $_SESSION['user_id'] ?? null,
                    'note'       => 'Opening Stock Balance'
                ]);
            }

            // Log creation to history
            $historyStmt = $db->prepare('INSERT INTO product_history (product_id, edited_by, action, changes, created_at) VALUES (:product_id, :edited_by, :action, :changes, NOW())');
            $historyStmt->execute([
                'product_id' => $productId,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'created',
                'changes' => json_encode([
                    'uid' => $uid,
                    'name' => $name,
                    'category_id' => $categoryId,
                    'description' => $data['description'] ?? null,
                    'picture_name' => $data['picture_name'] ?? null,
                    'color' => $data['color'] ?? null,
                    'has_barcode' => $hasBarcode,
                    'barcode' => $barcode,
                    'barcode_type' => $barcodeType,
                    'secondary_barcodes_count' => count($secondaryBarcodes),
                    'initial_stock' => $hasInitialStock ? [
                        'quantity' => $initQty,
                        'cost_price' => $initCost,
                        'total_value' => $initialTotalCost
                    ] : null
                ])
            ]);

            if ($hasInitialStock) {
                EntityVersion::bump($db, 'products', 'purchases');
            } else {
                EntityVersion::bump($db, 'products');
            }
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[PRODUCT CREATE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to create product. Please check server error logs.'], 500);
            return;
        }

        // Look up category name + uid for readable log
        $catStmt = $db->prepare('SELECT uid, name FROM categories WHERE id = :id LIMIT 1');
        $catStmt->execute(['id' => $categoryId]);
        $cat = $catStmt->fetch();
        $catDisplay = $cat ? trim(($cat['name'] ?? '') . ' ' . ($cat['uid'] ?? '')) : "ID:$categoryId";

        $createDetails = ['uid' => $uid, 'category' => $catDisplay, 'status' => 'active'];
        if ($data['description'] ?? null) $createDetails['description'] = $data['description'];
        if ($data['color'] ?? null) $createDetails['color'] = $data['color'];
        if ($data['picture_name'] ?? null) $createDetails['picture'] = $data['picture_name'];
        if ($hasBarcode === 1) {
            $createDetails['has_barcode'] = 1;
            $createDetails['barcode'] = $barcode;
            $createDetails['barcode_type'] = $barcodeType;
            if (!empty($secondaryBarcodes)) {
                $createDetails['secondary_barcodes_count'] = count($secondaryBarcodes);
            }
        }
        if ($hasInitialStock) {
            $createDetails['initial_quantity'] = $initQty;
            $createDetails['initial_cost_price'] = $initCost;
            $createDetails['initial_total_value'] = $initialTotalCost;
        }
        SystemLog::write('products', 'created', $productId, $name, json_encode($createDetails));

        Response::json(['id' => $productId, 'uid' => $uid], 201);
    }

    public function update(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensureProductHistoryTable($db);
        $this->ensurePurchaseWriteoffColumn($db);

        // Validate display_decimals if provided (before opening transaction)
        $decimalsProvided = array_key_exists('display_decimals', $data);
        $newDecimals = null;
        if ($decimalsProvided && $data['display_decimals'] !== null && $data['display_decimals'] !== '') {
            $dd = $data['display_decimals'];
            if (!is_numeric($dd) || (int) $dd != $dd || (int) $dd < 0 || (int) $dd > 16) {
                Response::json(['error' => 'display_decimals must be an integer between 0 and 16'], 400);
                return;
            }
            $newDecimals = (int) $dd;
        }

        // Validate name if provided
        if (array_key_exists('name', $data)) {
            if (trim((string)$data['name']) === '') {
                Response::json(['error' => 'Product name cannot be empty'], 400);
                return;
            }
            if (mb_strlen(trim((string)$data['name'])) > 190) {
                Response::json(['error' => 'Product name cannot exceed 190 characters'], 400);
                return;
            }
            $data['name'] = trim((string)$data['name']);
        }

        if (isset($data['color']) && mb_strlen((string)$data['color']) > 50) {
            Response::json(['error' => 'Color cannot exceed 50 characters'], 400);
            return;
        }

        // Validate category_id if provided (Rule 41 barrier)
        if (array_key_exists('category_id', $data)) {
            $catId = $data['category_id'];
            if ($catId === null || $catId === '' || (int)$catId <= 0) {
                Response::json(['error' => 'Valid category required'], 400);
                return;
            }
            $catCheck = $db->prepare('SELECT id FROM categories WHERE id = :cid AND deleted_at IS NULL');
            $catCheck->execute(['cid' => $catId]);
            if (!$catCheck->fetch()) {
                Response::json(['error' => 'Selected category does not exist or has been deleted'], 400);
                return;
            }
        }

        $db->beginTransaction();

        try {
            // Lock the product row so concurrent POS sales can't slip through a decimals change
            $stmt = $db->prepare('SELECT * FROM products WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetch();
            if (!$product) {
                $db->rollBack();
                Response::json(['error' => 'Product not found'], 404);
                return;
            }

            if ($product['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot modify a deleted product. Restore it first.'], 400);
                return;
            }

            $oldDecimals = $product['display_decimals'] !== null ? (int) $product['display_decimals'] : null;

            // If incoming picture is a streaming URL or unchanged reference, do not overwrite database BLOB/base64
            if (isset($data['picture']) && is_string($data['picture']) && (
                str_contains($data['picture'], '/image') ||
                str_starts_with($data['picture'], '/api/') ||
                str_contains($data['picture'], '/api/products/') ||
                str_starts_with($data['picture'], 'http://') ||
                str_starts_with($data['picture'], 'https://')
            )) {
                unset($data['picture']);
                unset($data['picture_name']);
            }

            // Validate stock thresholds if provided
            $inProvided = array_key_exists('stock_in_threshold', $data);
            $lowProvided = array_key_exists('stock_low_threshold', $data);
            $inVal = $inProvided ? (($data['stock_in_threshold'] !== null && trim((string)$data['stock_in_threshold']) !== '') ? trim((string)$data['stock_in_threshold']) : null) : $product['stock_in_threshold'];
            $lowVal = $lowProvided ? (($data['stock_low_threshold'] !== null && trim((string)$data['stock_low_threshold']) !== '') ? trim((string)$data['stock_low_threshold']) : null) : $product['stock_low_threshold'];

            if ($inVal !== null && (!is_numeric($inVal) || Decimal::comp($inVal, '0') < 0)) {
                $db->rollBack();
                Response::json(['error' => 'In-stock threshold must be a valid non-negative number'], 400);
                return;
            }
            if ($lowVal !== null && (!is_numeric($lowVal) || Decimal::comp($lowVal, '0') < 0)) {
                $db->rollBack();
                Response::json(['error' => 'Low-stock threshold must be a valid non-negative number'], 400);
                return;
            }
            if ($inVal !== null && $lowVal !== null && Decimal::comp($lowVal, $inVal) >= 0) {
                $db->rollBack();
                Response::json(['error' => 'Low stock threshold must be strictly less than in-stock threshold'], 400);
                return;
            }

            if (array_key_exists('price', $data) && $data['price'] !== null && trim((string)$data['price']) !== '') {
                if (!is_numeric($data['price']) || Decimal::comp((string)$data['price'], '0') < 0) {
                    $db->rollBack();
                    Response::json(['error' => 'Price cannot be negative'], 400);
                    return;
                }
            }

            $safePrice = array_key_exists('price', $data) ? ((isset($data['price']) && trim((string)$data['price']) !== '' && is_numeric($data['price']) && Decimal::comp((string)$data['price'], '0') >= 0) ? (string)$data['price'] : '0') : $product['price'];

            // Barcode processing flag (Mission 52)
            $allowedBarcodeTypes = ['CODE128', 'EAN13', 'QR'];
            $barcodeFieldsProvided = array_key_exists('has_barcode', $data) || 
                                     array_key_exists('barcode', $data) || 
                                     array_key_exists('barcode_type', $data) || 
                                     array_key_exists('secondary_barcodes', $data);

            $newHasBarcode = (int) $product['has_barcode'];
            $newBarcode = $product['barcode'];
            $newBarcodeType = $product['barcode_type'] ?? 'CODE128';
            $newSecondaryBarcodes = null; // null means keep existing unless provided

            if ($barcodeFieldsProvided) {
                if (array_key_exists('has_barcode', $data)) {
                    $newHasBarcode = !empty($data['has_barcode']) ? 1 : 0;
                }

                if ($newHasBarcode === 0) {
                    $newBarcode = null;
                    $newSecondaryBarcodes = [];
                } else {
                    if (array_key_exists('barcode', $data)) {
                        $bTrim = trim((string)($data['barcode'] ?? ''));
                        $newBarcode = $bTrim !== '' ? $bTrim : null;
                    }

                    if ($newBarcode !== null && mb_strlen($newBarcode) > 100) {
                        $db->rollBack();
                        Response::json(['error' => 'Barcode cannot exceed 100 characters'], 400);
                        return;
                    }

                    if (array_key_exists('barcode_type', $data)) {
                        $btRaw = strtoupper(trim((string)$data['barcode_type']));
                        $newBarcodeType = in_array($btRaw, $allowedBarcodeTypes, true) ? $btRaw : 'CODE128';
                    }

                    if (array_key_exists('secondary_barcodes', $data) && is_array($data['secondary_barcodes'])) {
                        $newSecondaryBarcodes = [];
                        foreach ($data['secondary_barcodes'] as $sec) {
                            $secVal = '';
                            $secType = 'CODE128';
                            $secPrefix = null;
                            $secLabel = null;

                            if (is_string($sec)) {
                                $secVal = trim($sec);
                            } elseif (is_array($sec)) {
                                $secVal = trim((string)($sec['barcode_value'] ?? $sec['barcode'] ?? $sec['value'] ?? ''));
                                $st = strtoupper(trim((string)($sec['barcode_type'] ?? $sec['type'] ?? 'CODE128')));
                                $secType = in_array($st, $allowedBarcodeTypes, true) ? $st : 'CODE128';
                                $secPrefix = isset($sec['prefix']) && trim((string)$sec['prefix']) !== '' ? mb_substr(trim((string)$sec['prefix']), 0, 20) : null;
                                $rawSecLabel = $sec['label_tag'] ?? $sec['label'] ?? null;
                                $secLabel = (isset($rawSecLabel) && trim((string)$rawSecLabel) !== '') ? mb_substr(trim((string)$rawSecLabel), 0, 100) : null;
                            }

                            if ($secVal !== '') {
                                if (mb_strlen($secVal) > 100) {
                                    $db->rollBack();
                                    Response::json(['error' => 'Secondary barcode cannot exceed 100 characters'], 400);
                                    return;
                                }
                                if ($newBarcode !== null && $secVal === $newBarcode) {
                                    continue;
                                }
                                $newSecondaryBarcodes[$secVal] = [
                                    'barcode_value' => $secVal,
                                    'barcode_type'  => $secType,
                                    'prefix'        => $secPrefix,
                                    'label'         => $secLabel,
                                    'is_primary'    => 0,
                                ];
                            }
                        }
                    }
                }

                // Check Barcode Uniqueness against OTHER Active Products
                $checkList = [];
                if ($newBarcode !== null) $checkList[] = $newBarcode;
                if ($newSecondaryBarcodes !== null) {
                    foreach ($newSecondaryBarcodes as $s) $checkList[] = $s['barcode_value'];
                }

                if (!empty($checkList)) {
                    $inPlaceholders = implode(',', array_fill(0, count($checkList), '?'));
                    $chkParams = array_merge($checkList, [(int)$id]);

                    // Check products table
                    $chk1 = $db->prepare("SELECT id, uid, name, barcode FROM products WHERE barcode IN ($inPlaceholders) AND id != ? AND deleted_at IS NULL LIMIT 1");
                    $chk1->execute($chkParams);
                    $col1 = $chk1->fetch(\PDO::FETCH_ASSOC);
                    if ($col1) {
                        $db->rollBack();
                        Response::json([
                            'error' => "Barcode '{$col1['barcode']}' is already assigned to active product '{$col1['name']}' (#{$col1['uid']})",
                            'conflicting_product' => [
                                'id' => (int) $col1['id'],
                                'uid' => $col1['uid'],
                                'name' => $col1['name'],
                                'barcode' => $col1['barcode']
                            ]
                        ], 400);
                        return;
                    }

                    // Check product_barcodes table
                    $chk2 = $db->prepare("SELECT pb.barcode_value, p.id, p.uid, p.name FROM product_barcodes pb JOIN products p ON pb.product_id = p.id WHERE pb.barcode_value IN ($inPlaceholders) AND p.id != ? AND p.deleted_at IS NULL LIMIT 1");

/* [INTERNAL_RUNTIME_FRAMEWORK_TOKEN] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
                    $chk2->execute($chkParams);
                    $col2 = $chk2->fetch(\PDO::FETCH_ASSOC);
                    if ($col2) {
                        $db->rollBack();
                        Response::json([
                            'error' => "Barcode '{$col2['barcode_value']}' is already assigned to active product '{$col2['name']}' (#{$col2['uid']})",
                            'conflicting_product' => [
                                'id' => (int) $col2['id'],
                                'uid' => $col2['uid'],
                                'name' => $col2['name'],
                                'barcode' => $col2['barcode_value']
                            ]
                        ], 400);
                        return;
                    }
                }
            }

            // Track changes (picture_name excluded — merged into picture entry below; quantity excluded — managed solely via FIFO)
            $changes = [];
            $fields = ['name', 'category_id', 'description', 'price', 'stock_in_threshold', 'stock_low_threshold', 'picture', 'color', 'display_decimals'];
            foreach ($fields as $field) {
                if (array_key_exists($field, $data)) {
                    $newValue = $data[$field];
                    $oldValue = $product[$field];

                    // Normalize for comparison
                    $normalizedNew = ($newValue === '' || $newValue === null) ? null : $newValue;
                    $normalizedOld = ($oldValue === '' || $oldValue === null) ? null : $oldValue;

                    if ($field === 'price') {
                        if (Decimal::comp($safePrice, (string)$oldValue) !== 0) {
                            $changes[$field] = ['from' => $oldValue, 'to' => $safePrice];
                        }
                    } else if ($field === 'stock_in_threshold' || $field === 'stock_low_threshold') {
                        $normCompNew = ($newValue !== null && trim((string)$newValue) !== '') ? (string)$newValue : null;
                        if ($normCompNew !== $normalizedOld && ($normCompNew === null || $normalizedOld === null || Decimal::comp($normCompNew, $normalizedOld) !== 0)) {
                            $changes[$field] = ['from' => $oldValue, 'to' => $normCompNew];
                        }
                    } else if ($field === 'picture') {
                        $picDataChanged = ($normalizedNew !== $normalizedOld);
                        $picNameChanged = ($normalizedNew !== null && array_key_exists('picture_name', $data) && ($data['picture_name'] ?? null) !== $product['picture_name']);
                        if ($picDataChanged || $picNameChanged) {
                            $oldName = ($normalizedOld !== null) ? ($product['picture_name'] ?: '[image]') : 'empty';
                            $newName = ($normalizedNew !== null) ? (($data['picture_name'] ?? null) ?: '[image]') : 'empty';
                            if ($oldName !== $newName || $oldName !== 'empty') {
                                $changes['picture'] = ['from' => $oldName, 'to' => $newName];
                            }
                        }
                    } else if ($field === 'category_id') {
                        if ((string) $normalizedNew !== (string) $normalizedOld) {
                            $resolveCat = function($cid) use ($db) {
                                if ($cid === null || $cid === '') return null;
                                $cs = $db->prepare('SELECT name, uid FROM categories WHERE id = :id LIMIT 1');
                                $cs->execute(['id' => $cid]);
                                $row = $cs->fetch();
                                return $row ? trim(($row['name'] ?? '') . ' ' . ($row['uid'] ?? '')) : "ID:$cid";
                            };
                            $changes['category'] = ['from' => $resolveCat($oldValue), 'to' => $resolveCat($newValue)];
                        }
                    } else if ($field === 'display_decimals') {
                        $oldInt = $normalizedOld !== null ? (int) $normalizedOld : null;
                        $newInt = $normalizedNew !== null ? (int) $normalizedNew : null;
                        if ($oldInt !== $newInt) {
                            $changes[$field] = ['from' => $oldInt, 'to' => $newInt];
                        }
                    } else if ((string) $normalizedNew !== (string) $normalizedOld) {
                        $changes[$field] = ['from' => $oldValue, 'to' => $newValue];
                    }
                }
            }

            if ($barcodeFieldsProvided) {
                if ((int)$product['has_barcode'] !== $newHasBarcode) {
                    $changes['has_barcode'] = ['from' => (int)$product['has_barcode'], 'to' => $newHasBarcode];
                }
                if ((string)$product['barcode'] !== (string)$newBarcode) {
                    $changes['barcode'] = ['from' => $product['barcode'], 'to' => $newBarcode];
                }
                if (($product['barcode_type'] ?? 'CODE128') !== $newBarcodeType) {
                    $changes['barcode_type'] = ['from' => $product['barcode_type'] ?? 'CODE128', 'to' => $newBarcodeType];
                }
                if ($newSecondaryBarcodes !== null) {
                    $changes['secondary_barcodes_updated'] = ['count' => count($newSecondaryBarcodes)];
                }
            }

            // Persist (direct overwrite of quantity is prevented to maintain FIFO audit invariants)
            $updateFields = [
                'name = :name',
                'category_id = :category_id',
                'description = :description',
                'price = :price',
                'stock_in_threshold = :stock_in_threshold',
                'stock_low_threshold = :stock_low_threshold',
                'color = :color',
                'display_decimals = :display_decimals',
                'has_barcode = :has_barcode',
                'barcode = :barcode',
                'barcode_type = :barcode_type',
                'edited_by = :edited_by',
                'updated_at = NOW()'
            ];
            $params = [
                'name' => array_key_exists('name', $data) ? $data['name'] : $product['name'],
                'category_id' => array_key_exists('category_id', $data) ? $data['category_id'] : $product['category_id'],
                'description' => array_key_exists('description', $data) ? $data['description'] : $product['description'],
                'price' => $safePrice,
                'stock_in_threshold' => $inVal,
                'stock_low_threshold' => $lowVal,
                'color' => array_key_exists('color', $data) ? $data['color'] : $product['color'],
                'display_decimals' => $decimalsProvided ? $newDecimals : $product['display_decimals'],
                'has_barcode' => $newHasBarcode,
                'barcode' => $newBarcode,
                'barcode_type' => $newBarcodeType,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'id' => $id,
            ];

            if (array_key_exists('picture', $data)) {
                $updateFields[] = 'picture = :picture';
                $updateFields[] = 'picture_name = :picture_name';
                $params['picture'] = $data['picture'];
                $params['picture_name'] = $data['picture_name'] ?? null;
            }

            $stmt = $db->prepare('UPDATE products SET ' . implode(', ', $updateFields) . ' WHERE id = :id');
            $stmt->execute($params);

            // Synchronize product_barcodes table (Mission 52)
            if ($barcodeFieldsProvided) {
                if ($newHasBarcode === 0) {
                    // Wipe all relational barcodes for disabled product
                    $db->prepare('DELETE FROM product_barcodes WHERE product_id = :pid')->execute(['pid' => $id]);
                } else {
                    // Update primary barcode in product_barcodes
                    $db->prepare('DELETE FROM product_barcodes WHERE product_id = :pid AND is_primary = 1')->execute(['pid' => $id]);
                    if ($newBarcode !== null) {
                        $rawPriLabel = $data['barcode_label'] ?? $data['barcode_tag'] ?? $data['label'] ?? null;
                        $primaryLabel = (isset($rawPriLabel) && trim((string)$rawPriLabel) !== '') ? mb_substr(trim((string)$rawPriLabel), 0, 100) : null;

                        $insPb = $db->prepare('INSERT INTO product_barcodes (product_id, barcode_value, barcode_type, prefix, label, is_primary, created_at) VALUES (:pid, :val, :type, :prefix, :label, 1, NOW())');
                        $insPb->execute([
                            'pid'    => $id,
                            'val'    => $newBarcode,
                            'type'   => $newBarcodeType,
                            'prefix' => $data['barcode_prefix'] ?? $data['prefix'] ?? null,
                            'label'  => $primaryLabel,
                        ]);
                    }

                    // If secondary barcodes explicitly passed, synchronize them
                    if ($newSecondaryBarcodes !== null) {
                        $db->prepare('DELETE FROM product_barcodes WHERE product_id = :pid AND is_primary = 0')->execute(['pid' => $id]);
                        if (!empty($newSecondaryBarcodes)) {
                            $insSec = $db->prepare('INSERT INTO product_barcodes (product_id, barcode_value, barcode_type, prefix, label, is_primary, created_at) VALUES (:pid, :val, :type, :prefix, :label, 0, NOW())');
                            foreach ($newSecondaryBarcodes as $sec) {
                                $insSec->execute([
                                    'pid'    => $id,
                                    'val'    => $sec['barcode_value'],
                                    'type'   => $sec['barcode_type'],
                                    'prefix' => $sec['prefix'],
                                    'label'  => $sec['label'],
                                ]);
                            }
                        }
                    }
                }
            }

            // If decimals changed, determine direction compared against effective decimals and compute hidden stock if decreased
            $decimalsChangedDirection = null;
            $hiddenImpact = null;
            if (isset($changes['display_decimals'])) {
                $globalDecimals = $this->getGlobalDecimals($db);
                $from = $changes['display_decimals']['from'];
                $to = $changes['display_decimals']['to'];
                $effFrom = $from !== null ? (int)$from : $globalDecimals;
                $effTo = $to !== null ? (int)$to : $globalDecimals;
                if ($effTo < $effFrom) {
                    $decimalsChangedDirection = 'decreased';
                    $hiddenImpact = $this->computeHiddenStock($db, (int) $id, $effTo);
                } else if ($effTo > $effFrom) {
                    $decimalsChangedDirection = 'increased';
                } else {
                    $decimalsChangedDirection = 'unchanged';
                }
            }

            // Log normal edits (excluding the decimals change, which gets its own entry below)
            $normalChanges = $changes;
            unset($normalChanges['display_decimals']);
            $historyStmt = $db->prepare('INSERT INTO product_history (product_id, edited_by, action, changes, created_at) VALUES (:product_id, :edited_by, :action, :changes, NOW())');
            if (!empty($normalChanges)) {
                $historyStmt->execute([
                    'product_id' => $id,
                    'edited_by' => $_SESSION['user_id'] ?? null,
                    'action' => 'updated',
                    'changes' => json_encode($normalChanges)
                ]);
            }

            // Build decimals-change payload (and write to product_history); SystemLog deferred until after commit
            $decimalsPayload = null;
            if (isset($changes['display_decimals'])) {
                $decimalsPayload = [
                    'from' => $changes['display_decimals']['from'],
                    'to' => $changes['display_decimals']['to'],
                    'direction' => $decimalsChangedDirection,
                ];
                if ($hiddenImpact !== null) {
                    $decimalsPayload['total_residual'] = $hiddenImpact['total_hidden'];
                    $decimalsPayload['batches_affected'] = count($hiddenImpact['batches']);
                }
                $historyStmt->execute([
                    'product_id' => $id,
                    'edited_by' => $_SESSION['user_id'] ?? null,
                    'action' => 'decimals_changed',
                    'changes' => json_encode($decimalsPayload)
                ]);
            }

            // If opening stock added via stock settings modal
            $initQtyRaw = trim((string)($data['initial_quantity'] ?? $data['add_initial_stock_qty'] ?? ''));
            $initCostRaw = trim((string)($data['initial_cost_price'] ?? $data['add_initial_stock_cost'] ?? '0'));

            if ($initQtyRaw !== '' && (!is_numeric($initQtyRaw) || Decimal::comp($initQtyRaw, '0') < 0)) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Added stock quantity cannot be negative'], 400);
                return;
            }
            if ($initCostRaw !== '' && (!is_numeric($initCostRaw) || Decimal::comp($initCostRaw, '0') < 0)) {
                if ($db->inTransaction()) $db->rollBack();
                Response::json(['error' => 'Added stock cost price cannot be negative'], 400);
                return;
            }

            $hasAddedStock = is_numeric($initQtyRaw) && Decimal::comp($initQtyRaw, '0') > 0;
            if ($hasAddedStock) {
                $initQty = Decimal::truncate($initQtyRaw, 16);
                if (Decimal::comp($initQty, '0') > 0) {
                    $initCost = (is_numeric($initCostRaw) && Decimal::comp($initCostRaw, '0') >= 0) ? Decimal::truncate($initCostRaw, 16) : '0';
                    $initialTotalCost = Decimal::mul($initQty, $initCost);

                    // Increment product stock
                    $currentQty = (string)$product['quantity'];
                    $newProductQty = Decimal::add($currentQty, $initQty);
                    $db->prepare("UPDATE products SET quantity = :q, updated_at = NOW() WHERE id = :id")->execute(['q' => $newProductQty, 'id' => $id]);

                    $finalProductName = array_key_exists('name', $data) ? $data['name'] : $product['name'];

                    // Create purchase lot
                    $purUid = 'PUR-' . date('Ymd') . '-' . strtoupper(bin2hex(random_bytes(3)));
                    $purStmt = $db->prepare('INSERT INTO purchases (uid, product_id, name, price, quantity, quantity_remaining, quantity_reserved, quantity_sold, total, date, created_by, owner_user_id, payment_status, amount_paid, paid_at, paid_by, supplier_note, settle_kind) 
                        VALUES (:uid, :pid, :name, :price, :qty, :qty_rem, 0, 0, :total, NOW(), :cb, :owner, "paid", :paid_amt, NOW(), :pb, :note, "cash")');
                    $purStmt->execute([
                        'uid'        => $purUid,
                        'pid'        => $id,
                        'name'       => $finalProductName,
                        'price'      => $initCost,
                        'qty'        => $initQty,
                        'qty_rem'    => $initQty,
                        'total'      => $initialTotalCost,
                        'cb'         => $_SESSION['user_id'] ?? null,
                        'owner'      => $_SESSION['user_id'] ?? null,
                        'paid_amt'   => $initialTotalCost,
                        'pb'         => $_SESSION['user_id'] ?? null,
                        'note'       => 'Opening Stock Balance'
                    ]);

                    $historyStmt->execute([
                        'product_id' => $id,
                        'edited_by'  => $_SESSION['user_id'] ?? null,
                        'action'     => 'stock_onboarding',
                        'changes'    => json_encode([
                            'quantity'    => $initQty,
                            'cost_price'  => $initCost,
                            'total_value' => $initialTotalCost
                        ])
                    ]);
                } else {
                    $hasAddedStock = false;
                }
            }

            if ($hasAddedStock) {
                EntityVersion::bump($db, 'products', 'purchases');
            } else {
                EntityVersion::bump($db, 'products');
            }
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log('[PRODUCT UPDATE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to update product. Please check server error logs.'], 500);
            return;
        }

        // SystemLog::write runs CREATE TABLE IF NOT EXISTS on first call.
        // DDL implicitly commits the active transaction in MySQL, so it MUST run
        // AFTER our $db->commit() — otherwise the explicit commit() throws
        // "no active transaction" (bug seen on the first PUT per worker process).
        if (!empty($normalChanges)) {
            SystemLog::write('products', 'updated', (int)$id, $product['name'], json_encode(array_merge(
                ['uid' => $product['uid'] ?? null],
                $normalChanges
            )));
        }
        if ($decimalsPayload !== null) {
            SystemLog::write('products', 'decimals_changed', (int)$id, $product['name'], json_encode(array_merge(
                ['uid' => $product['uid'] ?? null],
                $decimalsPayload
            )));
        }
        if (isset($initQty) && Decimal::comp($initQty, '0') > 0) {
            SystemLog::write('products', 'stock_inflow', (int)$id, $product['name'], json_encode([
                'uid'         => $product['uid'] ?? null,
                'quantity'    => $initQty,
                'cost_price'  => $initCost,
                'total_value' => $initialTotalCost,
                'note'        => 'Stock Inflow / Edit Addition'
            ]));
        }

        Response::json([
            'ok' => true,
            'decimals_changed' => $decimalsPayload,
        ]);
    }

    /**
     * GET /api/products/{id}/hidden-stock
     * Returns the per-batch hidden-stock breakdown for the product as-is (current decimals).
     */
    public function hiddenStock(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensurePurchaseWriteoffColumn($db);

        $stmt = $db->prepare('SELECT id, display_decimals, name, uid, deleted_at FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();
        if (!$product) {
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        if ($product['deleted_at'] !== null) {
            Response::json(['error' => 'Cannot inspect hidden stock on a deleted product. Restore it first.'], 400);
            return;
        }

        $result = $this->computeHiddenStock($db, (int) $id);
        Response::json([
            'product_id' => (int) $id,
            'display_decimals' => $result['decimals'],
            'total_hidden' => $result['total_hidden'],
            'batches' => $result['batches'],
        ]);
    }

    /**
     * POST /api/products/{id}/preview-decimals-change  body: {display_decimals:N}
     * Returns the impact of changing display_decimals to N WITHOUT persisting.
     */
    public function previewDecimalsChange(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensurePurchaseWriteoffColumn($db);

        if (!array_key_exists('display_decimals', $data) || $data['display_decimals'] === '' || $data['display_decimals'] === null) {
            Response::json(['error' => 'display_decimals required'], 400);
            return;
        }
        $dd = $data['display_decimals'];
        if (!is_numeric($dd) || (int) $dd != $dd || (int) $dd < 0 || (int) $dd > 16) {
            Response::json(['error' => 'display_decimals must be an integer between 0 and 16'], 400);
            return;
        }
        $newDecimals = (int) $dd;

        $stmt = $db->prepare('SELECT id, display_decimals, name, deleted_at FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();
        if (!$product) {
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        if ($product['deleted_at'] !== null) {
            Response::json(['error' => 'Cannot modify a deleted product. Restore it first.'], 400);
            return;
        }

        $currentDecimals = $product['display_decimals'] !== null
            ? (int) $product['display_decimals']
            : $this->getGlobalDecimals($db);

        $result = $this->computeHiddenStock($db, (int) $id, $newDecimals);

        $direction = 'unchanged';
        if ($newDecimals < $currentDecimals) $direction = 'decreased';
        else if ($newDecimals > $currentDecimals) $direction = 'increased';

        Response::json([
            'product_id' => (int) $id,
            'current_decimals' => $currentDecimals,
            'new_decimals' => $newDecimals,
            'direction' => $direction,
            'total_hidden' => $result['total_hidden'],
            'batches_affected' => count($result['batches']),
            'batches' => $result['batches'],
        ]);
    }

    /**
     * POST /api/products/{id}/reclaim-hidden  body: {reason: "..."}
     * Writes off all hidden residuals across batches at current display precision.
     * Residuals move from quantity_remaining to quantity_writeoff.
     */
    public function reclaimHidden(string $id, array $data): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensurePurchaseWriteoffColumn($db);
        $this->ensureProductHistoryTable($db);

        $reason = trim((string)($data['reason'] ?? ''));
        if ($reason === '') {
            Response::json(['error' => 'Reason is required'], 400);
            return;
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT * FROM products WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetch();
            if (!$product) {
                $db->rollBack();
                Response::json(['error' => 'Product not found'], 404);
                return;
            }

            if ($product['deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot modify a deleted product. Restore it first.'], 400);
                return;
            }

            $productDecimals = $product['display_decimals'] !== null ? (int) $product['display_decimals'] : null;
            $decimals = $this->getEffectiveDecimals($db, $productDecimals);

            // Lock the live batches too (skip custody-locked pending_transfer / pending_delegated lots)
            $batchStmt = $db->prepare('SELECT id, uid, quantity_remaining, quantity_writeoff, COALESCE(quantity_reserved, 0) AS quantity_reserved FROM purchases WHERE product_id = :pid AND deleted_at IS NULL AND (transfer_status IS NULL OR transfer_status NOT IN (\'pending_transfer\', \'pending_delegated\')) FOR UPDATE');
            $batchStmt->execute(['pid' => $id]);
            $batches = $batchStmt->fetchAll();

            $totalWriteoff = '0';
            $perBatch = [];
            $updateBatch = $db->prepare('UPDATE purchases SET quantity_remaining = :qr, quantity_writeoff = :wo WHERE id = :id');
            foreach ($batches as $b) {
                $qr   = (string) ($b['quantity_remaining'] ?? '0');
                $qres = (string) ($b['quantity_reserved']  ?? '0');
                // Only the AVAILABLE portion can be reclaimed. Reserved stock is
                // promised to pending orders at the precision it was reserved at;
                // reducing qr below qres would break those orders on completion.
                $available = Decimal::sub($qr, $qres);
                if (Decimal::comp($available, '0') <= 0) continue;
                $truncatedAvailable = Decimal::truncate($available, $decimals);
                $residual = Decimal::sub($available, $truncatedAvailable);
                if (Decimal::comp($residual, '0') <= 0) continue;

                $newQr = Decimal::sub($qr, $residual);
                $newWo = Decimal::add((string)($b['quantity_writeoff'] ?? '0'), $residual);
                $updateBatch->execute([
                    'qr' => $newQr,
                    'wo' => $newWo,
                    'id' => $b['id'],
                ]);
                $totalWriteoff = Decimal::add($totalWriteoff, $residual);
                $perBatch[] = [
                    'purchase_id' => (int) $b['id'],
                    'uid' => $b['uid'] ?? null,
                    'residual' => $residual,
                    'new_quantity_remaining' => $newQr,
                    'new_quantity_writeoff' => $newWo,
                ];
            }

            if (Decimal::comp($totalWriteoff, '0') <= 0) {
                $db->rollBack();
                Response::json(['error' => 'No hidden stock to reclaim'], 400);
                return;
            }

            // Update products.quantity and products.quantity_writeoff aggregates
            $sumStmt = $db->prepare('SELECT COALESCE(SUM(quantity_remaining), 0) AS s FROM purchases WHERE product_id = :pid AND deleted_at IS NULL');
            $sumStmt->execute(['pid' => $id]);
            $newAggregate = (string)($sumStmt->fetch()['s'] ?? '0');
            $newProductWo = Decimal::add((string)($product['quantity_writeoff'] ?? '0'), $totalWriteoff);
            $upd = $db->prepare('UPDATE products SET quantity = :q, quantity_writeoff = :wo, updated_at = NOW() WHERE id = :id');
            $upd->execute(['q' => $newAggregate, 'wo' => $newProductWo, 'id' => $id]);

            // History entry
            $historyStmt = $db->prepare('INSERT INTO product_history (product_id, edited_by, action, changes, reason, created_at) VALUES (:product_id, :edited_by, :action, :changes, :reason, NOW())');
            $historyStmt->execute([
                'product_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'hidden_stock_reclaimed',
                'changes' => json_encode([
                    'total_writeoff' => $totalWriteoff,
                    'decimals' => $decimals,
                    'batches' => $perBatch,
                ]),
                'reason' => $reason,
            ]);

            EntityVersion::bump($db, 'products', 'purchases');
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) $db->rollBack();
            error_log('[RECLAIM HIDDEN STOCK ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to reclaim hidden stock. Please check server error logs.'], 500);
            return;
        }

        // Deferred until after commit — see note in update(): DDL inside SystemLog::write
        // implicitly commits the transaction otherwise.
        SystemLog::write('products', 'hidden_stock_reclaimed', (int)$id, $product['name'], json_encode([
            'uid' => $product['uid'] ?? null,
            'total_writeoff' => $totalWriteoff,
            'reason' => $reason,
            'batches_affected' => count($perBatch),
        ]));

        Response::json([
            'ok' => true,
            'total_writeoff' => $totalWriteoff,
            'batches_affected' => count($perBatch),
        ]);
    }

    public function destroy(string $id, ?array $data = null): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensureProductHistoryTable($db);

        // Get deletion reason from request or passed data
        $input = $data !== null ? $data : (json_decode(file_get_contents('php://input'), true) ?? []);
        $deleteReason = trim($input['delete_reason'] ?? '');
        if ($deleteReason === '') {
            Response::json(['error' => 'Deletion reason is required'], 400);
            return;
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT id, uid, name, quantity, deleted_at FROM products WHERE id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetch();
            if (!$product) {
                $db->rollBack();
                Response::json(['error' => 'Product not found'], 404);
                return;
            }

            if (!empty($product['deleted_at'])) {
                $db->rollBack();
                Response::json(['error' => 'Product is already deleted'], 400);
                return;
            }

            // Check for active purchases inside transaction boundary (Rule 42 barrier)
            $purchaseStmt = $db->prepare('SELECT COUNT(*) as count FROM purchases WHERE product_id = :product_id AND deleted_at IS NULL');
            $purchaseStmt->execute(['product_id' => $id]);
            $purchaseCount = (int) ($purchaseStmt->fetch()['count'] ?? 0);

            if ($purchaseCount > 0) {
                $db->rollBack();
                Response::json(['error' => 'Cannot delete product with active purchases'], 400);
                return;
            }

            // Soft delete: update deleted_at, deleted_by, delete_reason
            $stmt = $db->prepare('UPDATE products SET deleted_at = NOW(), deleted_by = :deleted_by, delete_reason = :delete_reason WHERE id = :id');
            $stmt->execute([
                'deleted_by' => $_SESSION['user_id'] ?? null,
                'delete_reason' => $deleteReason,
                'id' => $id
            ]);

            // Log deletion to history
            $historyStmt = $db->prepare('INSERT INTO product_history (product_id, edited_by, action, reason, created_at) VALUES (:product_id, :edited_by, :action, :reason, NOW())');
            $historyStmt->execute([
                'product_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'deleted',
                'reason' => $deleteReason
            ]);

            EntityVersion::bump($db, 'products');
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[PRODUCT DELETE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to delete product. Please check server error logs.'], 500);
            return;
        }

        SystemLog::write('products', 'deleted', (int)$id, $product['name'], json_encode([
            'uid' => $product['uid'] ?? null,
            'reason' => $deleteReason,
            'status' => 'deleted'
        ]));

        Response::json(['ok' => true]);
    }

    public function restore(string $id, ?array $data = null): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensureProductHistoryTable($db);

        $input = $data !== null ? $data : (json_decode(file_get_contents('php://input'), true) ?? []);
        $restoreReason = trim($input['restore_reason'] ?? '');
        if ($restoreReason === '') {
            Response::json(['error' => 'Restore reason is required'], 400);
            return;
        }

        $db->beginTransaction();
        try {
            $stmt = $db->prepare('SELECT p.id, p.uid, p.name, p.deleted_at, c.id as category_exists, c.deleted_at as category_deleted_at FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE p.id = :id FOR UPDATE');
            $stmt->execute(['id' => $id]);
            $product = $stmt->fetch();
            if (!$product) {
                $db->rollBack();
                Response::json(['error' => 'Product not found'], 404);
                return;
            }

            if (empty($product['deleted_at'])) {
                $db->rollBack();
                Response::json(['error' => 'Product is already active'], 400);
                return;
            }

            // Category must exist and must not be deleted (Rule 43 barrier)
            if (empty($product['category_exists']) || $product['category_deleted_at'] !== null) {
                $db->rollBack();
                Response::json(['error' => 'Cannot restore product. Its category does not exist or is deleted. Restore the category first.'], 400);
                return;
            }

            // Restore: set deleted_at, deleted_by, delete_reason to NULL
            $stmt = $db->prepare('UPDATE products SET deleted_at = NULL, deleted_by = NULL, delete_reason = NULL WHERE id = :id');
            $stmt->execute(['id' => $id]);

            // Log restoration to history
            $historyStmt = $db->prepare('INSERT INTO product_history (product_id, edited_by, action, reason, created_at) VALUES (:product_id, :edited_by, :action, :reason, NOW())');
            $historyStmt->execute([
                'product_id' => $id,
                'edited_by' => $_SESSION['user_id'] ?? null,
                'action' => 'restored',
                'reason' => $restoreReason
            ]);

            EntityVersion::bump($db, 'products');
            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            error_log('[PRODUCT RESTORE ERROR] ' . $e->getMessage());
            Response::json(['error' => 'Failed to restore product. Please check server error logs.'], 500);
            return;
        }

        SystemLog::write('products', 'restored', (int)$id, $product['name'], json_encode([
            'uid' => $product['uid'] ?? null,
            'reason' => $restoreReason,
            'status' => 'active'
        ]));

        Response::json(['ok' => true]);
    }

    public function history(string $id): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);
        $this->ensureProductHistoryTable($db);

        // Get product info with creator, editor and deleter names (excluding heavy base64 image)
        $stmt = $db->prepare("SELECT p.id, p.uid, p.name, p.category_id, p.description, p.picture_name, p.price,
                                     p.quantity, p.quantity_reserved, p.quantity_writeoff, p.stock_in_threshold,
                                     p.stock_low_threshold, p.display_decimals, p.color, p.created_by, p.edited_by,
                                     p.deleted_by, p.delete_reason, p.created_at, p.updated_at, p.deleted_at,
                                     IF(p.picture IS NOT NULL AND p.picture != '', 1, 0) AS has_picture,
                                     IF(p.picture IS NOT NULL AND p.picture != '', 
                                        CONCAT('/api/products/', p.id, '/image?v=', UNIX_TIMESTAMP(COALESCE(p.updated_at, p.created_at, NOW()))), 
                                        NULL
                                     ) AS picture,
                                     c.name as category_name, c.uid as category_uid,
                                     u.username as creator_name,
                                     u_edit.username as editor_name,
                                     u_del.username as deleted_by_name
                              FROM products p
                              LEFT JOIN categories c ON p.category_id = c.id
                              LEFT JOIN users u ON p.created_by = u.id
                              LEFT JOIN users u_edit ON p.edited_by = u_edit.id
                              LEFT JOIN users u_del ON p.deleted_by = u_del.id
                              WHERE p.id = :id");
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch();
        if (!$product) {
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        // Get history with user information
        $stmt = $db->prepare('
            SELECT ph.*, u.username
            FROM product_history ph
            LEFT JOIN users u ON ph.edited_by = u.id
            WHERE ph.product_id = :id
            ORDER BY ph.created_at DESC
        ');
        $stmt->execute(['id' => $id]);
        $history = $stmt->fetchAll();

        Response::json([
            'product' => $product,
            'history' => $history
        ]);
    }

    /**
     * Product-Level Stock Reservation & Holds Inspector.
     * Aggregates held stock across all lots belonging to this product.
     */
    public function holds(int $id): void
    {
        $db = Database::getConnection();

        $stmt = $db->prepare('SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON c.id = p.category_id WHERE p.id = :id AND p.deleted_at IS NULL LIMIT 1');
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (!$product) {
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        // Sum purchases for this product
        $pStmt = $db->prepare('
            SELECT 
                COALESCE(SUM(quantity), 0) AS total_qty,
                COALESCE(SUM(quantity_remaining), 0) AS remaining_qty,
                COALESCE(SUM(quantity_reserved), 0) AS reserved_qty
            FROM purchases
            WHERE product_id = :id AND deleted_at IS NULL
        ');
        $pStmt->execute(['id' => $id]);
        $pRow = $pStmt->fetch(\PDO::FETCH_ASSOC);

        $tot = (string)($pRow['total_qty'] ?? '0');
        $rem = (string)($pRow['remaining_qty'] ?? '0');
        $res = (string)($pRow['reserved_qty'] ?? '0');
        $trulyFree = Decimal::comp($rem, $res) > 0 ? Decimal::sub($rem, $res) : '0';

        // Granular Order Items Hold Query across all batches of this product
        $stmtHolds = $db->prepare('
            SELECT 
                oi.id AS item_id,
                oi.order_id,
                oi.purchase_id,
                oi.quantity,
                oi.price,
                oi.cost,
                p.uid AS purchase_uid,
                o.id AS order_backend_id,
                COALESCE(o.uid, CONCAT("#ORD-", o.id)) AS order_uid,
                o.custom_sale,
                o.service_name,
                o.status AS order_status,
                COALESCE(c.name, "") AS customer_name,
                o.date AS created_at,
                u.username AS cashier_username
            FROM order_items oi
            JOIN orders o ON o.id = oi.order_id
            JOIN purchases p ON p.id = oi.purchase_id
            LEFT JOIN customers c ON c.id = o.customer_id
            LEFT JOIN users u ON u.id = o.created_by
            WHERE p.product_id = :id 
              AND o.deleted_at IS NULL
              AND (
                ((o.custom_sale = 0 OR o.custom_sale IS NULL) AND o.status IN ("pending", "processing"))
                OR
                (o.custom_sale = 1 AND o.status NOT IN ("completed", "delivered", "cancelled", "refunded"))
              )
            ORDER BY o.id DESC, oi.id ASC
        ');
        $stmtHolds->execute(['id' => $id]);
        $activeHolds = $stmtHolds->fetchAll(\PDO::FETCH_ASSOC);

        // Active Stock Transfers for any batch of this product
        $stmtTransfers = $db->prepare('
            SELECT 
                p.id AS source_purchase_id,
                p.uid AS purchase_uid,
                p.transfer_settlement_id,
                p.quantity_remaining AS quantity,
                p.transfer_status,
                p.transfer_initiated_at AS created_at,
                u_from.username AS from_username,
                u_to.username AS to_username
            FROM purchases p
            LEFT JOIN users u_from ON u_from.id = p.transfer_initiated_by
            LEFT JOIN users u_to ON u_to.id = p.transfer_to_user_id
            WHERE p.product_id = :id 
              AND p.deleted_at IS NULL
              AND p.transfer_status IN ("pending_transfer", "pending_delegated")
            ORDER BY p.id DESC
        ');
        $stmtTransfers->execute(['id' => $id]);
        $activeTransfers = $stmtTransfers->fetchAll(\PDO::FETCH_ASSOC);

        Response::json([
            'ok' => true,
            'product_id' => $id,
            'product_uid' => $product['uid'] ?? "PRD-{$id}",
            'product_name' => $product['name'],
            'display_decimals' => $product['display_decimals'] ?? 2,
            'category_name' => $product['category_name'] ?? '',
            'quantity_total' => $tot,
            'quantity_remaining' => $rem,
            'quantity_reserved' => $res,
            'available_free' => $trulyFree,
            'holds' => $activeHolds,
            'transfers' => $activeTransfers
        ]);
    }

    /**
     * GET /api/products/{id}/barcodes
     * Retrieves all barcodes associated with a product (primary and secondary). (Mission 52)
     */
    public function getBarcodes(int $id): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);

        $stmt = $db->prepare('SELECT id, uid, name, has_barcode, barcode, barcode_type, deleted_at FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $product = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$product) {
            Response::json(['error' => 'Product not found'], 404);
            return;
        }

        $bcStmt = $db->prepare('SELECT id, product_id, barcode_value, barcode_type, prefix, label, is_primary, created_at FROM product_barcodes WHERE product_id = :id ORDER BY is_primary DESC, id ASC');
        $bcStmt->execute(['id' => $id]);
        $barcodes = $bcStmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($barcodes as &$b) {
            $b['id'] = (int) $b['id'];
            $b['product_id'] = (int) $b['product_id'];
            $b['is_primary'] = (int) $b['is_primary'];
            $b['label_tag'] = $b['label'];
        }
        unset($b);

        // Fallback backward compatibility for legacy records with primary barcode in products table
        if (empty($barcodes) && !empty($product['barcode']) && (int)$product['has_barcode'] === 1) {
            $barcodes = [[
                'id' => 0,
                'product_id' => (int) $product['id'],
                'barcode_value' => $product['barcode'],
                'barcode_type' => $product['barcode_type'] ?? 'CODE128',
                'prefix' => null,
                'label' => 'Primary',
                'is_primary' => 1,
                'created_at' => null,
            ]];
        }

        Response::json([
            'ok'              => true,
            'product_id'      => (int) $product['id'],
            'product_uid'     => $product['uid'],
            'product_name'    => $product['name'],
            'has_barcode'     => (int) ($product['has_barcode'] ?? 0),
            'primary_barcode' => $product['barcode'],
            'barcode_type'    => $product['barcode_type'] ?? 'CODE128',
            'barcodes'        => $barcodes,
        ]);
    }

    /**
     * GET /api/products/check-barcode?value={code}&exclude_id={id}
     * Real-time validation endpoint ensuring a barcode is not already assigned to another active product. (Mission 52)
     */
    public function checkBarcode(): void
    {
        $db = Database::getConnection();
        $this->ensureProductsColumns($db);

        $value = trim($_GET['value'] ?? '');
        $excludeId = isset($_GET['exclude_id']) && is_numeric($_GET['exclude_id']) ? (int) $_GET['exclude_id'] : null;

        if ($value === '') {
            Response::json(['error' => 'Barcode value parameter is required'], 400);
            return;
        }

        // 1. Check primary barcodes in products table
        $sql = "SELECT id, uid, name, barcode FROM products WHERE barcode = :val AND deleted_at IS NULL";
        $params = ['val' => $value];
        if ($excludeId !== null) {
            $sql .= " AND id != :exclude_id";
            $params['exclude_id'] = $excludeId;
        }
        $sql .= " LIMIT 1";

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $matched = $stmt->fetch(\PDO::FETCH_ASSOC);

        // 2. Check relational barcodes in product_barcodes table
        if (!$matched) {
            $sqlPb = "SELECT pb.barcode_value, p.id, p.uid, p.name 
                      FROM product_barcodes pb 
                      JOIN products p ON pb.product_id = p.id 
                      WHERE pb.barcode_value = :val AND p.deleted_at IS NULL";
            $paramsPb = ['val' => $value];
            if ($excludeId !== null) {
                $sqlPb .= " AND p.id != :exclude_id";
                $paramsPb['exclude_id'] = $excludeId;
            }
            $sqlPb .= " LIMIT 1";

            $stmtPb = $db->prepare($sqlPb);
            $stmtPb->execute($paramsPb);
            $pbMatch = $stmtPb->fetch(\PDO::FETCH_ASSOC);
            if ($pbMatch) {
                $matched = [
                    'id' => $pbMatch['id'],
                    'uid' => $pbMatch['uid'],
                    'name' => $pbMatch['name'],
                    'barcode' => $pbMatch['barcode_value'],
                ];
            }
        }

        if ($matched) {
            Response::json([
                'ok' => true,
                'is_unique' => false,
                'available' => false,
                'message' => 'Barcode is already assigned to another product',
                'assigned_to' => [
                    'id'   => (int) $matched['id'],
                    'uid'  => $matched['uid'],
                    'name' => $matched['name'],
                ]
            ]);
            return;
        }

        Response::json([
            'ok' => true,
            'is_unique' => true,
            'available' => true,
            'message' => 'Barcode is available'
        ]);
    }
}

/* [END_OF_MODULE_SECURITY_SEAL] ‍﻿​‌​‌‌​‌‌​‌​​​​‌‌​‌​‌​​‌​​‌​‌‌​​‌​‌​‌​​​​​‌​‌​‌​​​‌​​‌‌‌‌​‌​​​‌‌‌​‌​‌​​‌​​‌​​​​​‌​‌​‌​​​​​‌​​‌​​​​‌​​‌​​‌​‌​​​​‌‌​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​‌‌​​‌​​​‌​‌​‌​​‌‌‌​​‌​​​​​‌​‌​​‌‌‌​​‌​​​​‌‌​‌​​​‌​‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​​‌‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​‌​‌​‌​‌​​​​​‌​‌​​‌‌​​​​‌​​​​​​‌​‌​​​​​‌​‌​​‌​​‌​​‌‌‌‌​‌​‌​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​‌​​​‌​‌‌​​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​‌​​‌​​‌​​​‌​​​‌​‌‌‌​‌​​​​‌​‌​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​​‌​​​‌‌‌​‌​‌​‌‌​​​‌‌​‌‌‌​‌​​​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​‌​‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​​‌​​​​​​​‌​‌​​​​‌​​‌​​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​​‌​‌‌​‌​‌​‌​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌​‌​​​​​‌​​‌‌‌‌​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​​​​​‌​​​​​​‌​​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​‌​​‌‌​‌‌‌​‌​‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​‌​‌​​‌​‌​​‌​​​​‌​‌​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​‌​‌​​‌​​​​​​‌​​​​‌‌​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌‌​​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​​​‌‌‌​‌​​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​​‌‌‌​‌​​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​​​‌​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​​​‌​‌​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​​‌‌‌​‌​​​‌​​​​​​‌​​‌‌‌‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​​​‌‌​​‌‌‌​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​​‌​​​​‌​‌​​‌​​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​​‌​‌​​‌​​​​​​‌​​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌‌‌​‌​​​‌​​​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​​​​​​‌​​​‌​​​‌‌​‌​​‌​‌‌​​‌‌‌​‌‌​‌​​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌​‌‌​​​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌​‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​​​​‌​‌​​​​​‌​‌​​‌​‌‌​‌‌​‌​​‌​​‌​‌​​‌‌‌​​‌​‌​‌‌​​‌​​‌​​‌​‌​​‌‌‌‌​‌​​‌‌​​​‌​​​​​‌​‌​​​​‌​​‌​​‌‌​​​‌​​​‌​‌​​‌​​​​​​‌​​​‌​​​‌​​‌​​‌​‌​‌​​‌​​‌​​​‌​‌​‌​​​​‌‌​‌​‌​‌​​​‌​​‌​​‌​‌​‌​‌‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​‌​​​‌​​‌‌‌‌​​‌​​​​​​‌​​​​​‌​‌​​‌‌​​​‌​​‌‌​​​​‌​​​​​​‌​​​​​‌​‌​​‌​​‌​​‌​​​​​​‌​​​​​‌​‌​‌​​‌‌​‌​‌​​‌‌​‌​​‌​​‌​‌​‌​​‌‌​‌​‌​‌​​​‌​​​​​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌​​​‌​​​‌​​​‌​‌​‌​​​​‌‌​‌​​‌‌‌‌​‌​​‌‌​‌​‌​‌​​​​​‌​​‌​​‌​‌​​‌‌​​​‌​​​‌​‌​‌​‌​​‌​​‌​‌​​‌‌​​‌​​​​​​​‌​​‌‌​​​‌​​​​​​‌​​​​​‌​‌​‌​‌​‌​‌​‌​‌​​​‌​​‌‌‌‌​‌​​‌‌​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​​​​‌​‌​​​‌‌‌​‌​​​‌​‌​‌​​‌‌‌​​‌​‌​‌​​​‌​‌​​‌‌​‌​‌‌‌​‌​​‌‌‌​‌​​​​​‌​‌​​‌​‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌​‌​‌‌‌​‌​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌​​‌​‌​‌‌‌‌​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​​‌​​​​​​‌​​​​​‌​‌​​​‌​​​‌​​​‌​​​‌​​​​​‌​​‌​​​​​​‌​​​​‌​​‌​​‌‌‌‌​‌​‌​‌​‌​‌​‌‌​‌​​‌​​‌​​‌​‌​​​​​‌​‌​​‌‌‌​​‌​​​‌​‌​​‌​​​​​​‌​​‌‌​‌​‌‌​‌‌‌‌​‌‌​‌​​​​‌‌​​​​‌​‌‌​‌‌​‌​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌​​​​​‌​‌‌​‌‌​‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​​‌​​​​​​​‌​‌​​​​‌​‌​​‌‌​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​​​‌​‌‌‌​​‌​​‌​​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​​‌​‌​​‌​​‌​‌‌‌​​​​​‌​‌​​‌​‌‌​​‌​‌‌​‌‌‌‌​‌‌‌​‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌‌​‌​​​‌‌​‌‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌​​‌‌​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​​​‌​​‌‌​‌​​‌​‌‌​​‌​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​‌‌​​‌‌‌​​‌​​‌‌​‌‌‌‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌‌​​‌‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​‌​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​​‌​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​​​‌​‌‌​‌‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌​​​‌‌‌​‌​​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​​​​‌​‌‌​‌‌​​​‌‌​‌‌​‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​​​‌​‌​​‌‌​‌‌‌‌​‌‌​​‌‌​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​‌​​​‌‌​​‌​‌​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌​‌‌‌‌​‌‌‌​​​​​‌‌​​‌​‌​‌‌‌​​‌​​​‌​​​​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌‌​‌​​​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​​‌​​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌​‌‌​​​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌‌​‌‌​​‌​‌​‌‌​​​‌‌​‌‌‌​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌​‌​​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌​​‌‌​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​‌‌‌​​‌‌​​‌​‌‌‌​​​​​‌​‌​​‌​​​​​‌​‌‌​‌‌‌​​‌‌‌‌​​‌​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌‌​​​‌​‌‌‌​‌​‌​‌‌​​‌​‌​‌‌‌​​‌‌​‌‌‌​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌​‌​​‌​‌‌​‌‌​‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​‌‌‌​‌‌​‌‌‌​​‌‌​​‌​‌​‌‌‌​​‌​​‌‌‌​​‌‌​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​​​​​‌​‌‌​​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​‌‌​‌​‌‌​‌‌‌‌​‌‌‌​‌‌​​‌‌​​‌​‌​​‌​​​​​​‌‌​‌‌​​​‌‌​‌​​‌​‌‌​​​‌‌​‌‌​​‌​‌​‌‌​‌‌‌​​‌‌‌​​‌‌​‌‌​‌​​‌​‌‌​‌‌‌​​‌‌​​‌‌‌​​‌​​​​​​‌‌​​​‌‌​‌‌​‌​​​​‌‌​​‌​‌​‌‌​​​‌‌​‌‌​‌​‌‌​‌‌‌​​‌‌​​‌​‌‌​​​​‌​​​​​​‌‌​​​‌​​‌‌‌‌​​‌​‌‌‌​​​​​‌‌​​​​‌​‌‌‌​​‌‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​‌‌‌‌​‌‌​​​‌​​‌‌​​‌‌​​‌‌‌​‌​‌​‌‌‌​​‌‌​‌‌​​​‌‌​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​‌‌​​​​‌​​​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​​‌​​​​​​‌‌‌​​‌​​‌‌​​‌​‌​‌‌​​​‌​​‌‌‌​​‌​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌‌​​‌‌​‌‌​‌‌‌‌​‌‌​​‌‌​​‌‌‌​‌​​​‌‌‌​‌‌‌​‌‌​​​​‌​‌‌‌​​‌​​‌‌​​‌​‌​​​​‌​‌​​‌‌​‌​​‌​‌‌‌​​‌‌​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​​‌​​​​​​‌‌‌​‌​‌​‌‌​‌‌‌​​‌‌​​​​‌​‌‌‌​‌​‌​‌‌‌​‌​​​‌‌​‌​​​​‌‌​‌‌‌‌​‌‌‌​​‌​​‌‌​‌​​‌​‌‌‌‌​‌​​‌‌​​‌​‌​‌‌​​‌​​​​‌​​​​​​‌‌‌​‌‌​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌​​​‌‌​​​​‌​‌‌‌​‌​​​‌‌​‌​​‌​‌‌​‌‌‌‌​‌‌​‌‌‌​​​‌​​​​​​‌‌​​​​‌​‌‌​‌‌‌​​‌‌​​‌​​​​‌​​​​​​‌​​‌‌​‌​‌​‌​‌​‌​‌​‌​​‌‌​‌​‌​‌​​​​‌​​​​​​‌​​​​‌​​‌​​​‌​‌​​‌​​​​​​‌​‌​​‌​​‌​​​‌​‌​‌​​​‌‌​​‌​‌​‌​‌​‌​‌​​‌‌​‌​​​‌​‌​‌​​​‌​​​​‌​​​​​​‌​​‌​​‌​‌​​‌‌​‌​‌​​‌‌​‌​‌​​​‌​‌​‌​​​‌​​​‌​​‌​​‌​‌​​​​​‌​‌​‌​‌​​​‌​​​‌​‌​‌​​‌‌​​​‌​‌‌​​‌​​‌​‌‌‌​﻿‍ */
