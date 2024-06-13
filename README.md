# Buto-Plugin-ImageContainer
- Set background image in a container.
- Look nice first on a page.

## Container widget
```
type: widget
data:
  plugin: image/container
  method: container
  data:
```
If class container or container-fluid. Default is true.
```
    fluid: true
```
Height of container. Default is 400px.
```
    height: 400px
```
Position of image. Default center but sometimes top is better.
```
    background-position: 'center'
```
Image path.
```
    image: /plugin/image/container/norway_montains.jpg
```
Any html elements.
```
    innerHTML:
```

### innerHTML
Element example.
```
-
  type: h1
  attribute:
    class: _my_h1_continer_content text-uppercase
    style:
      color: white
      padding: 10px
      display: inline-block
      margin: 40px
      margin-top: 350px
      font-family: arial
  innerHTML: Headline
```
Media query to handle font size.
```
@media (min-width: 1000px) {
    ._my_h1_continer_content{font-size: none;}
}      
@media (max-width: 999px) {
    ._my_h1_continer_content{font-size: 4vw;}
}      
```
