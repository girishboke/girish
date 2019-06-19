# HTML & XHTML

XHTML is HTML written as XML.

---

### What Is XHTML?

- XHTML stands for E**X**tensible **H**yperText **M**arkup **L**anguage
- XHTML is almost identical to HTML
- XHTML is stricter than HTML
- XHTML is HTML defined as an XML application
- XHTML is supported by all major browsers

---

### Why XHTML?

Many pages on the internet contain "bad" HTML.

This HTML code works fine in most browsers (even if it does not follow the HTML rules):

```html
<html>
<head>
  <title>This is bad HTML</title>

<body>
  <h1>Bad HTML
  <p>This is a paragraph
</body>
```

Today's market consists of different browser technologies. Some browsers run on computers, and some browsers run on mobile phones or other small devices. Smaller devices often lack the resources or power to interpret "bad" markup.

XML is a markup language where documents must be marked up correctly (be "well-formed").

If you want to study XML, please read our XML tutorial.

XHTML was developed by combining the strengths of HTML and XML.

XHTML is HTML redesigned as XML.

---

## The Most Important Differences from HTML:

### Document Structure

- XHTML DOCTYPE is **mandatory**
- The xmlns attribute in `<html>` is **mandatory**
- `<html>`, `<head>`, `<title>`, and `<body>` are **mandatory**

### XHTML Elements

- XHTML elements must be **properly nested**
- XHTML elements must always be **closed**
- XHTML elements must be in **lowercase**
- XHTML documents must have **one root element**

### XHTML Attributes

- Attribute names must be in **lower case**
- Attribute values must be **quoted**
- Attribute minimization is **forbidden**

---

## `<!DOCTYPE ....>` Is Mandatory

An XHTML document must have an XHTML DOCTYPE declaration.

A complete list of all the [XHTML Doctypes][doctype] is found in our HTML Tags Reference.

The `<html>`, `<head>`, `<title>`, and `<body>` elements must also be present, and the xmlns attribute in `<html>` must specify the xml namespace for the document.

This example shows an XHTML document with a minimum of required tags:

```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Title of document</title>
  </head>

  <body>
    some content
  </body>
</html>
```

### XHTML Elements Must Be Properly Nested

In HTML, some elements can be improperly nested within each other, like this:

> `<b><i>`This text is bold and italic`</b></i>`

In XHTML, all elements must be properly nested within each other, like this:

> `<b><i>` This text is bold and italic `</i></b>`

### XHTML Elements Must Always Be Closed

This is wrong:

> `<p>`This is a paragraph

> `<p>`This is another paragraph

This is correct:

> `<p>`This is a paragraph</p>

> `<p>`This is another paragraph</p>

### Empty Elements Must Also Be Closed

This is wrong:

> A break: `<br>`

> A horizontal rule: `<hr>`

> An image: `<img src="happy.gif" alt="Happy face">`

This is Correct:

> A break: `<br />`

> A horizontal rule: `<hr />`

> An image: `<img src="happy.gif" alt="Happy face" />`

### XHTML Elements Must Be In Lower Case

This is wrong:

> `<BODY>`

> `<P>`This is a paragraph `</P>`

> `</BODY>`

This is correct:

> `<body>`

> `<p>` This is a paragraph `</p>`

> `</body>`

### XHTML Attribute Names Must Be In Lower Case

This is wrong:

```html
<table width="100%"></table>
```

This is correct:

```html
<table width="100%"></table>
```

### Attribute Values Must Be Quoted

This is wrong:

```html
<table width="100%"></table>
```

This is correct:

```html
<table width="100%"></table>
```

### Attribute Minimization Is Forbidden

Wrong:

```html
<input type="checkbox" name="vehicle" value="car" checked />
```

Correct:

```html
<input type="checkbox" name="vehicle" value="car" checked="checked" />
```

Wrong:

```html
<input type="text" name="lastname" disabled />
```

Correct:

```html
<input type="text" name="lastname" disabled="disabled" />
```

---

## How to Convert from HTML to XHTML

1. Add an XHTML `<!DOCTYPE>` to the first line of every page
1. Add an xmlns attribute to the html element of every page
1. Change all element names to lowercase
1. Close all empty elements
1. Change all attribute names to lowercase
1. Quote all attribute values

---

### Validate HTML With The W3C Validator

Put your web address in the box below:
[Validate Here...](https://www.w3schools.com/html/html_validate.html)

[doctype]: https://www.w3schools.com/tags/tag_doctype.asp
